@extends('layout.layout')

@section("title", "This is home page")


@section("content1")
<div class="container-fluid banner parallax">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5 text-center pt-5">
            <div class="content">
            <h4 class="display-4">Software Engineer</h4>
            <h6>Mobile and Web</h6>
            <button class="btn btn-primary">Get In Touch</button>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
<h1 class="display-3 text-center my-5">Our Services</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
<h1 class="display-3 text-center my-5">Recent Projects</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/project.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/project.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/project.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container mb-5">
    <h1 class="display-3 text-center my-5">Contact Us</h1>
        <div class="row">
            <div class="col-md-5">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
            </div>
            <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116812.19854298823!2d90.35484730452326!3d23.805039900512973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1637267325420!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

@endsection("content")