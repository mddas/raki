<?php

namespace App\Http\Controllers;
use App\Models\GlobalSetting;
use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
    public function index(){
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        //return $menus;
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        } 
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first(); 
        //return $missons;       
        return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
    }
    public function category($menu){
        //return $menu." this is category";
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$menu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$menu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
        $slug_detail = Navigation::all()->where('nav_name',$menu);
        //
        if(Navigation::all()->where('nav_name',$menu)->count()>0){
                    //$normal_notice_page = Navigation::all()->where('nav_name',$slug)->first();
            $category_id = Navigation::all()->where('nav_name',$menu)->first()->id;
            if(Navigation::all()->where('parent_page_id',$category_id)->count()>0){
                   $category_type = Navigation::all()->where('parent_page_id',$category_id)->first()->page_type;
                }
            else{
                   $category_type = Navigation::all()->where('nav_name',$menu)->where('page_type','!=','Notice')->first()->page_type;
                 }
         }
        else{
            $category_type = null;
        }
        
        if($category_type == "Photo Gallery"){
            //return "return to page gallary";
            return view("website.gallery")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Job"){
            //return "return to view job";
            return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Notice"){
            // return "return to view Notice";
            return view("website.notice")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($category_type == "Normal"){
            return view("website.normal")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        else{
            return redirect('/');
            //return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
    }

  public function subcategory($slug1,$submenu){
        //return $menu."::".$submenu;
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        //return $menus->first()->submenus;
        $jobs = Navigation::query()->where('page_type','Job')->latest()->get();
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()!=null){
            $about_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%about%")->where('page_type','Group')->latest()->first()->id;
            $About = Navigation::query()->where('parent_page_id',$about_id)->latest()->first();
        }
        else{
            $About = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()!=null){
            $banner_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%banner%")->where('page_type','Group')->latest()->first()->id;
            $banners = Navigation::query()->where('parent_page_id',$banner_id)->latest()->get();
        }
        else{
            $banners = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()!=null){
            $slider_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%slider%")->where('page_type','Group')->latest()->first()->id;
            $sliders = Navigation::query()->where('parent_page_id',$slider_id)->latest()->get();
        }
        else{
            $sliders = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()!=null){
            $misson_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%misson%")->where('page_type','Group')->latest()->first()->id;
            $missons = Navigation::query()->where('parent_page_id',$misson_id)->latest()->get();
            //return $misson;
        }
        else{
            $missons = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
            $message_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
            $message = Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
        }
        else{
            $message = null;
        }
        if(Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()!=null){
            $process_id = Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%process%")->where('page_type','Group')->latest()->first()->id;
            $process = Navigation::query()->where('parent_page_id',$process_id)->latest()->get();
        }
        else{
            $process = null;
        }
        //return $misson;
        $job_categories = Navigation::all()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null);
        //sreturn $job_categories;
        $global_setting = GlobalSetting::all()->first();        
        //return view("website.index")->with(['jobs'=>$jobs,'banners'=>$banners,'about'=>$About,'menus'=>$menus,'global_setting'=>$global_setting,'sliders'=>$sliders,'missons'=>$missons,'job_categories'=>$job_categories,'message'=>$message,'process'=>$process]);
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $job_id = Navigation::all()->where('nav_name',$submenu)->first()->id;        
            $jobs = Navigation::query()->where('parent_page_id',$job_id)->where('page_type','Job')->orderBy('created_at', 'desc')->get();
        }
        else{
            $jobs = null;
        }
        $slug_detail = Navigation::all()->where('nav_name',$submenu);
        //
        if(Navigation::all()->where('nav_name',$submenu)->count()>0){
            $subcategory_id = Navigation::all()->where('nav_name',$submenu)->first()->id;
            if(Navigation::all()->where('parent_page_id',$subcategory_id)->count()>0){
                $subcategory_type = Navigation::all()->where('parent_page_id',$subcategory_id)->first()->page_type;//slug/slug2(GROUP)
            }
            else{
                $subcategory_type = Navigation::all()->where('nav_name',$submenu)->where('page_type','Normal')->first()->page_type;//slug/slug2(not group)
            }
           
         }
        else{
             $subcategory_type = null;
         }
        
        if($subcategory_type == "Photo Gallery"){
            //return "return to page gallary";
            return view("website.gallery")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "Job"){
            //return "return to view job";
            return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "Notice"){
            // return "return to view Notice";
            return view("website.notice")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "Normal"){
            return view("website.normal")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        elseif($subcategory_type == "Group"){
            //return "return to job else";
            return view("website.job-list")->with(['jobs'=>$jobs,'menus'=>$menus,'sliders'=>$sliders,'about'=>$About,'global_setting'=>$global_setting,'slug_detail'=>$slug_detail]);
        }
        else{
            return redirect("/");
        }
    }
    public function singlePage($slug){
        $job =Navigation::all()->where('nav_name',$slug)->first();        
        $global_setting = GlobalSetting::all()->first(); 
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        return view("website.job_detail_single_page")->with(['job'=>$job,'menus'=>$menus,'global_setting'=>$global_setting]);
    }
    public function Contact(){
        //$job =Navigation::all()->where('nav_name',$slug)->first();        
        $global_setting = GlobalSetting::all()->first(); 
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        return view("website.contact")->with(['menus'=>$menus,'global_setting'=>$global_setting]);
    }
    public function jobApply($slug){
         $global_setting = GlobalSetting::all()->first(); 
        $menus = Navigation::all()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0);
        return view("website.contact")->with(['menus'=>$menus,'global_setting'=>$global_setting]);
    }
}
