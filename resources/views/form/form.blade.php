@component('mail::message')

    <h3>New Message From {{$contact_form['email']}}</h3>
    <h4>{{$contact_form['name']}}</h4>
    <h4>{{$contact_form['subject']}}</h4>
    <p>{{$contact_form['message']}}</p>

@endcomponent
