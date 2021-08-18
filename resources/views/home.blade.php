@extends('layout')

@section('title')
    {{ __('messages.title') }}
@endsection

@section('body')
    <div class="row">
        <div class="col-12 col-md-4 offset-4">
            <form action="/lang" method="post">
                @csrf
                <select id="lang_dropdown" name="lang" class="form-control my-2">
                    <option value="ar" {{ old('lang',App::currentLocale()) == 'ar' ? 'selected' : '' }}>Arabic
                    </option>
                    <option value="en" {{ old('lang',App::currentLocale()) == 'en' ? 'selected' : '' }}>English
                    </option>
                    <option value="es" {{ old('lang',App::currentLocale()) == 'es' ? 'selected' : ''  }}>Spanish
                    </option>
                    <option value="ur" {{ old('lang',App::currentLocale()) == 'ur' ? 'selected' : ''  }}>Urdu
                    </option>
                    <option value="chs" {{ old('lang',App::currentLocale()) == 'chs' ? 'selected' : ''  }}>Chinese
                    </option>
                </select>
            </form>
        </div>
        <div class="col-12 col-md-10 mx-md-auto text-center">
            <h1 class="text-primary">{{ __('messages.welcome') }}</h1>
            <p>{{ __('messages.greeting',['name' => 'Faizan Ahmed Raza']) }}</p>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $("#lang_dropdown").change(function () {
            $("form").submit();
        });
    </script>
@endpush
