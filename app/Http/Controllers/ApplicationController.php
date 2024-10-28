<?php
  
namespace App\Http\Controllers;
  
use App\Models\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ApplicationStoreRequest;
use App\Http\Requests\ApplicationUpdateRequest;
  
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $applications = Application::latest()->paginate(5);
        
        return view('admin.applications.index', compact('applications'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.applications.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(ApplicationStoreRequest $request): RedirectResponse
    {   
        Application::create($request->validated());
         
        return redirect()->route('applications.index')
                         ->with('success', 'Application created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Application $application): View
    {
        return view('admin.applications.show',compact('application'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application): View
    {
        return view('admin.applications.edit',compact('application'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(ApplicationUpdateRequest $request, Application $application): RedirectResponse
    {
        $applications->update($request->validated());
        
        return redirect()->route('applications.index')
                        ->with('success','Application updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application): RedirectResponse
    {
        $application->delete();
         
        return redirect()->route('applications.index')
                        ->with('success','Application deleted successfully');
    }
}