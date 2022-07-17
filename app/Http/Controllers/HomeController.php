<?php

namespace App\Http\Controllers;
use App\Models\GlobalSetting;
use App\Models\Navigation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('parent_page_id',0);
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::all()->where('parent_page_id',$about_id)->last();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::all()->where('parent_page_id',$banner_id);
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::all()->where('parent_page_id',$slider_id);
        }
        else{
            $sliders = "null";
        }
        
        $global_setting = GlobalSetting::all()->first();        
        return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders]);
    }
    public function category($slug){
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('parent_page_id',0);
        $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
        $About = Navigation::all()->where('parent_page_id',$about_id)->last();
        $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;

        $banners = Navigation::all()->where('parent_page_id',$banner_id);

        $id = Navigation::all()->where('nav_name',$slug)->first()->id;        
        $jobs = Navigation::query()->where('parent_page_id',$id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        //return $jobs;
        return view("website.category")->with(['jobs'=>$jobs,'menus'=>$menus,'banners'=>$banners,'about'=>$About]);
    }
    public function singlePage($slug){
       
        $menus = Navigation::all()->where('nav_category','Main')->where('parent_page_id',0);
        $top_first_news = Navigation::all()->where('nav_category','Home')->where('nav_name','Top Three News')->last();
        $homenews = Navigation::query()
                ->where('nav_category','Home')
                ->where('page_type','Normal')
                ->where('nav_name', 'LIKE', "%news%") 
                ->latest()
                ->get();
        
        $singleNews =  Navigation::all()->where('nav_name',$slug)->first();
        return view("website.single")->with(['singlenews'=>$singleNews,'menus'=>$menus,'homenews'=>$homenews,'top_first_news'=>$top_first_news]);
    }
}
