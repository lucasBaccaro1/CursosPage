@extends ('layouts.plantilla')

@section ('title','Nosotros')

@section('content')

{{-- <form action="https://formsubmit.co/lucas.ospegap@gmail.com" method="POST">
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <button type="submit">Send</button>
</form> --}}

<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Por favor, si quieres ser parte de nuestra cadena de aprendizaje, no dudes en contactarte con nosotros</p>
                <div class="my-5">
                    <form action="https://formsubmit.co/lucas.ospegap@gmail.com" method="POST">
                        <div class="form-floating">
                            <input class="form-control" type="text" name="name" placeholder="Enter your name..." required />
                            <label for="name">Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="text" name="email" placeholder="Enter your email..." required />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" type="number" name="number" placeholder="Enter your number..." required />
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                            <div class="form-floating">
                                <textarea class="form-control"  type="text" name="text" placeholder="Enter your message..." required></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        <br />
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection()


{{-- <form action="https://formsubmit.co/your@email.com" method="POST">
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <button type="submit">Send</button>
</form> --}}
