<form method="POST" action="{{ url('sendSms') }}" id="first" name="first_form" >
    {{csrf_field()}}
    Number:
    <input type="text" name="recipient_number" class="form-control mb-2" placeholder="(+380_________)">
    Text:
    <input type="text" name="body" class="form-control mb-2" placeholder="text..."><br/>
    <input type="submit" value="Send sms!" class="btn btn-primary">
</form>