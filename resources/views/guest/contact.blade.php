
<!DOCTYPE html>
<html lang="en">
    @include ('partials.head')
<body id="ugly-body" class="bg-dark">
    <div class="container h-100">
        <div class="row h-100 justify-content-center">
            <div class="col-6 align-self-center text-center text-white ">
                <form action="{{ route('guest.sendMail') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="guestName">Add Name</label>
                        <input class="form-control" type="text" name="guest_name" id="guestName">
                    </div>

                    <div class="mb-3">
                        <label for="guestEmail">add Mail</label>
                        <input  class="form-control" type="email" name="guest_email" id="guestEmail">
                    </div>

                    <div class="mb-3">
                        <label for="guest_message">Add Message text</label>
                        <textarea  class="form-control" type="text" value="" name="guest_message" id="guest_message" rows="5"></textarea>
                    </div>
                    <button class="btn btn-outline-warning" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
