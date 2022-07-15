<?php

namespace App\Http\Controllers;
use App\Job;
use App\Models\Navigation;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobList($nav_category = null){
        $navigations  = Navigation::where('page_type','Job')->orderBy('position','ASC')->get();
        $categories = Navigation::where('page_type','Group')->where('parent_page_id',0)->get();
        //return $navigations;
        return view('admin.job.job_list', compact('navigations','nav_category','categories'));
    }
    public function AddJob($category){
       $request_segment = \Request::segment(4);
        if(intval($request_segment) == 0){
            $request_segment = \Request::segment(3);
            $current_max_position = Navigation::where('nav_category',$request_segment)->max('position');
        }else{
            $current_max_position = Navigation::where('parent_page_id',$request_segment)->max('position');
            $category .= '/'.$request_segment;
        }

        $next_position = $current_max_position + 1;
        $categories = Navigation::where('page_type','group')->where('nav_category', $category)->get();
        return view('admin.job.job_create',compact('category','next_position','categories'));
    }

    public function store(Request $request, $nav_category)
    {
        $this->validate($request,[
            'nav_name' => 'required|min:2',
            'alias' => 'required|unique:navigations',
            'caption' => 'required',
            'country' => 'required',
            'company_name' => 'required',
            'salary' => 'required',
            'icon_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240'

        ]);
        //get job details and store it in another table "

        $company_name = $request['company_name'];
        $country = $request['country'];
        $salary = $request['salary'];
        $contract_time = $request['contract_time'];
         
          //unset above data from request
          unset($request['company_name']);
          unset($request['country']);
          unset($request['salary']);
          unset($request['contract_time']);

        //close
        
        $data = $request->all();
        $data['nav_category'] = $nav_category;
        $request_segment = \Request::segment(4);
        $parent_id = intval($request_segment);
        $data['parent_page_id'] = $parent_id;
        $parent_id = ($parent_id == '')?'':'/'.$parent_id;

        if($request->hasFile('icon_image')){
            $img_file = $request->file('icon_image');
            $data['icon_image'] = time().'_'.$img_file->getClientOriginalName();
            $destinationPath = public_path('uploads/icon_image');
            $img_file->move($destinationPath,$data['icon_image']);
        }
        if($request->hasFile('featured_image')){
            $img_file = $request->file('featured_image');
            $data['featured_image'] = time().'_'.$img_file->getClientOriginalName();
            $destinationPath = public_path('uploads/featured_image');
            $img_file->move($destinationPath,$data['featured_image']);
        }

        if($request->hasFile('banner_image')){
            $banner_file = $request->file('banner_image');
            $data['banner_image'] = "/uploads/banner_image/".time().'_'.$banner_file->getClientOriginalName();
            $destinationPath = public_path('uploads/banner_image');
            $banner_file->move($destinationPath,$data['banner_image']);
        }

        if($request->hasFile('attachment')){
            $attachment_file = $request->file('attachment');
            $data['attachment'] = time().'_'.$attachment_file->getClientOriginalName();
            $destinationPath = public_path('uploads/attachment');
            $attachment_file->move($destinationPath,$data['attachment']);
        }

        if($request->hasFile('main_attachment')){
            $attachment_file = $request->file('main_attachment');
            $data['main_attachment'] = time().'_'.$attachment_file->getClientOriginalName();
            $destinationPath = public_path('uploads/main_attachment');
            $attachment_file->move($destinationPath,$data['main_attachment']);
        }

        $navigation = Navigation::create($data);
        
           //*********store to job table */
              if($navigation){
                    $job = new Job;            
                    $job->country = $country;    
                    $job->company_name = $company_name;
                    $job->salary = $salary; 
                    $job->contract_time = $contract_time; 
                    $job->navigation_id =  $navigation->id;    
                    $job->save();
              }
        return redirect('admin/navigation-list/'.$nav_category.$parent_id)->with('success','Data Added Succssfully!!');

    }
}
