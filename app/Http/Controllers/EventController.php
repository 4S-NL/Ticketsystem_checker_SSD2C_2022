<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Event;
use App\Models\Order;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id','desc')->get();
        return view ('events.index', compact('events'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publicindex()
    {
        $events = Event::orderBy('id','desc')->get();
        return view ('events.publicindex', compact('events'));
    }

    /**
     * Show the form for creating a new resource.Q
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'capacity' => 'required',
            'price' => 'required'
        ]);

        Event::create($request->post());

        return redirect()->route('events.index')->with('succes','Event is aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'capacity' => 'required',
            'price' => 'required'
        ]);

        $event->fill($request->post())->save();

        return redirect()->route('events.index')->with('succes', 'Evenement is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('succes', 'Evenement is verwijderd');
    }

    public function checkout(Event $event) {
        return view('events.checkout', compact('event'));
    }

    public function storeCheckout(Request $request, Event $event) {
        // alles uit het form valideren (later)


        // alle gegevens uit het form moeten ergens opgeslagen worden
            // - een customer moet opgeslagen worden V
            $customer = Customer::create( $request->except(['_token', 'amount_tickets']) );
            // - een nieuwe order moet opgeslagen worden
            $order = Order::create([
                'customer_id' => $customer->id
            ]);
            // - een of meerdere tickets opslaan in database. Op basis van ingevulde form
        // een confirm pagina tonen met daarop de bestelde data
        // - een mail sturen naar de klant met de bestelde tickets in PDF

    }

}
