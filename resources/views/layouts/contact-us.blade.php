<section class="contactus">
    <p class="contactus__text">
        @lang('main.contact_us')
        <span></span><span></span><span></span><span></span>
    </p>

    @include('alert')
    <div class="overlay hidden"></div>
    <div class="sweet-modal">
        <div class="sweet-modal-content hidden">
            <div class="sweet-modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                        fill="%23292c34" />
                </svg>
            </div>
            <h2 class="modal-feedback-title">@lang('main.contact_form') </h2>
            <p class="modal-feedback-desc">@lang('main.call')</p>

            @if($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
          </div>
          @endif
            <form class='feedback' action="{{ route('contact-form.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-feedback-form-group">
                    <label for="company">@lang('main.pursue')</label>
                    <input type="text" name="company">
                </div>
                <div class="modal-feedback-form-group">
                    <label for="name">@lang('main.name') *</label>
                    <input type="text" name="names">
                </div>
                <div class="modal-feedback-form-group">
                    <label for="email">@lang('main.email') *</label>
                    <input type="email" name="gmail">
                </div>
                <div class="modal-feedback-form-group">
                    <label for="phone">@lang('main.phone') *</label>
                    <input type="text" name="numbers">
                </div>
                <div class="modal-feedback-form-group">
                    <label for="comment">Text</label>
                    <textarea name="content"></textarea>
                </div>
                <div class="modal-feedback-batton">
                    <button class="btn-hexagon" type="submit">@lang('main.send')</button>
                </div>
            </form>
        </div>
    </div>
</section>

