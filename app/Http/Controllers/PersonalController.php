<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Title;
use App\Models\Research;
use App\Models\People;
use App\Models\Contact;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PersonalController extends Controller
{
    /* Title and Subtitle */
    
    public function title_and_subtitle_Store(Request $request){
        $titleAndSubtitle= new Title;
        $titleAndSubtitle->title= $request->title;
        $titleAndSubtitle->sub_title= $request->sub_title;
        
        $titleAndSubtitle->save();
        
        return redirect()->back()->with('message', 'Title and Subtitle has been added successly!!');
    }
    public function title_and_subtitle_Show(){
        $titleAndSubtitleShow= Title::select('*')
                            ->orderBy('id','DESC')
                            ->get();
        return view('personal.TitleAndSubtitle.titleAndSubtitleShow', compact('titleAndSubtitleShow'));
    }
    public function title_and_subtitle_edit($id){
        $data=Title::find($id);
        return view('personal.TitleAndSubtitle.titleAndSubtitleEdit', compact('data'));
    }
    public function title_and_subtitle_edit_process(Request $request, $id){
        $data=Title::find($id);
        $data->title= $request->title;
        $data->sub_title= $request->sub_title;
        
        $data->save();
      	return redirect()->to('/titleAndSubtitleshow')->with('message', 'Title and Subtitle Info has been updated successly!!');
    }
    public function delete_title_and_subtitle($id)
    {
        $data=Title::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Title and Subtitle has been deleted successly!!');
    }
    
    /* Research */
    
    public function research_store(Request $request){
        $research= new Research;
        $research->title= $request->researchTitle;
        if($request->hasFile('title_image')){
            $file=$request->file('title_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images/',$filename);
            $research->title_image=$filename;
        }
        
        $research->sub_title= $request->researchSubtitle;
         if($request->hasFile('sub_title_image')){
            $file=$request->file('sub_title_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images/',$filename);
            $research->sub_title_image=$filename;
        }
        $research->description= $request->description;
        
        $research->save();
        
        return redirect()->back()->with('message', 'Research has been added successly!!');
    }
    public function research_show(){
        $researchShow= Research::select('*')
                    ->orderBy('id','DESC')
                    ->get();
        return view('personal.research.researchShow', compact('researchShow'));
    }
    public function research_edit($id){
        $data=Research::find($id);
        $title=Title::all();
        $subtitle=Title::all();
        return view('personal.research.researchEdit', compact('data','title','subtitle'));
    }
    public function research_edit_process(Request $request, $id){
        $data=Research::find($id);
        $data->title= $request->researchTitle;
        if($request->hasFile('title_image')) {
          $destination= 'images/'.$data->title_image;
          if(File::exists($destination)){
              File::delete($destination);
          }
          $file= $request->file('title_image');
          $extension= $file->getClientOriginalExtension();
          $filename= time().'.'.$extension;
          $request->title_image->move(public_path('images'), $filename);
          $data->title_image= $filename;
        }
        
        $data->sub_title= $request->researchSubtitle;
        if($request->hasFile('sub_title_image')) {
          $destination= 'images/'.$data->sub_title_image;
          if(File::exists($destination)){
              File::delete($destination);
          }
          $file= $request->file('sub_title_image');
          $extension= $file->getClientOriginalExtension();
          $filename= time().'.'.$extension;
          $request->sub_title_image->move(public_path('images'), $filename);
          $data->sub_title_image= $filename;
        }
        $data->description= $request->description;
        
        $data->save();
      	return redirect()->to('/researchshow')->with('message', 'Research Info has been updated successly!!');
    }
    public function delete_research($id)
    {
        $data=Research::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Research has been deleted successly!!');
    }
    
    /* Single Research Details */
    public function research_show_details_single($id){
        $data=Research::find($id);
        return view('personal.research.singleResearch', compact('data'));
    }
    
    /* Member */
    
    public function member_store(Request $request){
        $member= new People;
        $member->name= $request->name;
        $member->category= $request->category;
        $member->email= $request->email;
        $member->phone= $request->phone;
        $member->address= $request->address;
        $member->educationional_background= $request->educationional_background;
        $member->professional_background= $request->professional_background;
        $member->research= $request->researchTitle;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images/',$filename);
            $member->image=$filename;
        }
        $member->description= $request->description;
        $member->save();
        
        return redirect()->back()->with('message', 'Member has been added successly!!');
    }
    public function member_Show(){
        $memberShow= People::all();
        return view('personal.member.allmember', compact('memberShow'));
    }
    public function member_edit($id){
        $data=People::find($id);
        $title=Title::all();
        return view('personal.member.memberEdit', compact('data','title'));
    }
     public function member_edit_process(Request $request, $id){
        $data=People::find($id);
        $data->name= $request->name;
        $data->category= $request->category;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->address= $request->address;
        $data->educationional_background= $request->educationional_background;
        $data->professional_background= $request->professional_background;
        $data->research= $request->researchTitle;
        if($request->hasFile('image')) {
          $destination= 'images/'.$data->image;
          if(File::exists($destination)){
              File::delete($destination);
          }
          $file= $request->file('image');
          $extension= $file->getClientOriginalExtension();
          $filename= time().'.'.$extension;
          $request->image->move(public_path('images'), $filename);
          $data->image= $filename;
        }
        $data->description= $request->description;
        
        $data->save();
      	return redirect()->to('/membershow')->with('message', 'Memeber Info has been updated successly!!');
    }
    public function delete_member($id)
    {
        $data=People::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Member has been deleted successly!!');
    }
    public function contact_store(Request $request){
        $contact= new Contact;
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->phone= $request->phone;
        $contact->subject= $request->subject;
        $contact->message= $request->message;
        
        $contact->save();
        return redirect()->back()->with('message','Your Information has been received! We will contact you soon.');
    }
}
