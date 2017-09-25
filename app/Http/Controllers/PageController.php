<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\ProductCategory;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\ProductImage;
use App\ProductImageDetail;
use App\News;
use App\About;
use App\Footer;

class PageController extends Controller
{
    public function __construct(){
        $parentProCat = ProductCategory::select('id','name','alias')->where('parent_id',0)->where('status',1)->get();
        $proCat = array();
        foreach($parentProCat as $parent){
            $proCat[$parent->id]['alias'] = $parent->alias;
            $proCat[$parent->id]['name'] = $parent->name;
            $submenu = ProductCategory::select('id','name','alias')->where('parent_id',$parent->id)->where('status',1)->get();
            foreach($submenu as $sub){
                $proCat[$parent->id]['sub'][$sub->id]['name'] = $sub->name;
                $proCat[$parent->id]['sub'][$sub->id]['alias'] = $sub->alias;
            }
        }
        $newscategory = Category::select('name','alias')->where('parent_id',0)->where('status',1)->get();

        $lastest_news = News::select('title','alias','hit')->where('status',1)->orderBy('hit','desc')->orderBy('created_at','desc')->get();

        $footer = Footer::first();

        //detect mobile
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
        $detect =  'mobile here';
        else $detect =  'not_mobile';
        session()->put('detect',$detect);

        // echo '<pre>'; print_r(\Route::current());
        // echo '<pre>'; print_r(\Request::segments());



        view()->share('route',\Route::current()->uri());
        view()->share('proCat',$proCat);
        view()->share('newscategory',$newscategory);
        view()->share('lastest_news',$lastest_news);
        view()->share('footer',$footer);
        view()->share('detect',$detect);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastest_news = News::select('title','alias','image','hit')->where('status',1)->orderBy('created_at','DESC')->orderBy('updated_at','DESC')->get();
        $lastest_product = Product::select('title','alias','price','sale','slide','hit','created_at')->where('status',1)->orderBy('created_at','DESC')->orderBy('updated_at','DESC')->get();


        return view('pages.index',compact('lastest_news','lastest_product'));
    }

    /*
     * Frontend view
     */
    public function viewCategory($category_alias){
        $parent = ProductCategory::where('alias',$category_alias)->first();
        $subs = ProductCategory::select('id','name','alias','hit')
        ->whereIn('parent_id',function($query) use ($category_alias){
            $query->select('id')->from('product_category')->where('alias',$category_alias);
        })->get();

        return view('pages.category',compact('parent','subs'));
    }
    public function viewSubCategory($category_alias){
        if(!isset($_REQUEST['page'])) $page = 1;
        else $page = $_REQUEST['page'];

        $category = ProductCategory::where('alias', $category_alias)->first();
        $productid = ProductDetail::select('product_id')->where('product_category_id', $category->id)->get();
        $productidArray = array();
        foreach($productid->toArray() as $pro){
            $productidArray[] = $pro['product_id'];
        }
        $productReturnbyPage = pagination($productidArray, count($productidArray), 10, $page);

        $products = Product::select('id','title','alias','price','sale','summary','thumb','hit','created_at')->whereIn('id',$productReturnbyPage['data'])->where('status',1)->get();
        $pagination = $productReturnbyPage['num'];
        return view('pages.subcategory',compact('category','products','pagination','page'));
    }

    public function viewProduct($product_alias){
        $product = Product::where('alias',$product_alias)->first();
        $productArray = json_decode(json_encode($product),true);

        $category = array();
        $cat = $product->category_enable;
        $parent = $this->getParentCat($cat[0]->parent_id);

        $category['parent']['alias'] = $parent->alias;
        $category['parent']['name'] = $parent->name;
        $category['sub']['alias'] = $cat[0]->alias;
        $category['sub']['name'] = $cat[0]->name;


        if($productArray != null){
            $imageArray = explode('%', $productArray['content_image']);
            foreach($imageArray as $key => $image){
                $imagelink = ProductImage::select('link')->where('id',$image)->first();
                $imageArray[$key] = $imagelink->link;
            }

            $productArray['content_image_detail'] = $imageArray;
        }

        return view('pages.product',compact('product','productArray','category'));
    }
    
    public function viewNewsCategory($category_alias){

        $category = Category::where('alias',$category_alias)->first();
        $news = $category->news_enable;

        return view('pages.newscategory',compact('category'));
    }

    public function viewNews($news_alias)
    {
        $news = News::where('alias',$news_alias)->first();

        $news_related = News::select('title','alias')->whereNotIn('id',[$news->id])->orderBy('created_at','DESC')->offset(0)->limit(10)->get();
        return view('pages.news',compact('news','news_related'));
    }

    public function getParentCat($parent_id){
        return ProductCategory::select('path','name','alias')->where('id',$parent_id)->first();
    }

    public function about(){
        $about = About::find(1);
        return view('pages.about',compact('about'));
    }

    public function contact(){
        return view('pages.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
