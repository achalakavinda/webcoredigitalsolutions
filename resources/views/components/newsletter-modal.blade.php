<!-- resources/views/components/newsletter-modal.blade.php -->

<div id="modal-2" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- CLOSE BUTTON -->
            <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                <span class="flaticon-cancel"></span>
            </button>

            <!-- MODAL CONTENT -->
            <div class="modal-body text-center">

                <!-- IMAGE -->
                <div class="modal-body-img">
                    <img class="img-fluid" src="{{ asset('images/modal-newsletter-blue.jpg') }}" alt="content-image">
                </div>

                <!-- NEWSLETTER FORM -->
                <div class="modal-body-content">

                    <!-- Title -->
                    <h5 class="s-24 w-700">Stay up to date with our news, ideas and updates</h5>

                    <!-- Form -->
                    <form method="POST" action="{{ route('lead.stayUpPopup') }}" class="newsletter-form">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" autocomplete="off" class="form-control"
                                placeholder="Your email address" required id="s-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn--theme hover--theme">Subscribe Now</button>
                            </span>
                        </div>

                        <!-- Newsletter Form Notification -->
                        @error('email')
                            <label for="s-email" class="form-notification text-danger">
                                {{ $message }}
                            </label>
                        @enderror
                    </form>

                </div> <!-- END NEWSLETTER FORM -->

            </div> <!-- END MODAL CONTENT -->

        </div>
    </div>
</div> <!-- END MODAL WINDOW (NEWSLETTER FORM) -->
