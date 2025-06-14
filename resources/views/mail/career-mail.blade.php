@component('mail::message')
    - **Details**:
    - **Full Name**: {{ $data->name }}
    - **Email**: {{ $data->email }}
    - **Phone no.**: {{ $data->phone }}
    - **Position**: {{ $data->position }}
    - **Message**: {{ $data->message }}
@endcomponent
