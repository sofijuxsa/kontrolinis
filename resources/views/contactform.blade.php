

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Susisiekite su mumis') }}</div>
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="services">Pasirinkite kategoriją:</label> <br>
                                <select name="category_id" id="category_id" >
                                    @foreach($categories as $category)
                                        <option id="category_id" value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select> <br>
                                <input id="name" type="text" name="name" class="form-control"
                                       placeholder="Vardas"> <br>
                                <input id="surname" type="text" name="surname" class="form-control"
                                       placeholder="Pavardė"> <br>
                                <input id="email" type="text" name="email" class="form-control"
                                       placeholder="El paštas"> <br>
                                <input id="phone_number" type="text" name="phone_number" class="form-control"
                                       placeholder="Tel numeris (nebūtina)"> <br>
                                <input id="subject" type="text" name="subject" class="form-control"
                                       placeholder="Tema"> <br>
                                <input id="message" type="text" name="message" class="form-control"
                                       placeholder="Jūsų žinutė"> <br>
                                <input type="submit" value="Atnaujinti" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
