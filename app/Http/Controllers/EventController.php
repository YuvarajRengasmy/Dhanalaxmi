<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $events = Event::latest()->paginate(5);

        return view('admin.events.index', compact('events'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $events = Event::latest()->paginate(5);

        return view('finovo.event', compact('events'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $events = Event::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'event_type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'location' => 'required|string|max:255',
           'date' => 'required|string|max:255',
           'time' => 'required|string|max:255',
        ]);

        // Create a new About instance
        $event = new Event();

        // Store each title and description
        $event->title = $request->title;
        $event->event_type = $request->event_type;
        $event->location = $request->location;
        $event->date = $request->date;
        $event->time = $request->time;

        // Handle Image One
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('event_images', 'public');
            $event->image = $path;
        }
       // Save the About instance to the database
        $event->save();

        // Redirect to a specific route or return success message
        return redirect()->route('events.index')->with('success', 'Event information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(Event $event): View
    {
    
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event): View
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventUpdateRequest $request, Event $event): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $data['image'] = $request->file('image')->store('images/events', 'public');
        }

       

        
        $event->update($data);

        return redirect()->route('events.index')
                         ->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event): RedirectResponse
    {
        // Delete associated images
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }
      
        

        $event->delete();

        return redirect()->route('events.index')
                         ->with('success', 'Events deleted successfully.');
    }
}
