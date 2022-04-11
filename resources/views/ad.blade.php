@include('partials.header')
<main>
    <section class="ad">
        <div class="section-title">
            <h1>Skapa annons</h1>
            <p>Skapa en annons snabbt och enkelt på under 5 minuter!</p>
        </div>
        <div class="ad-container">
            <div class="upload-container">
                <p>Ladda upp foton & planritning</p>
                <div class="button-container">
                    <form>
                        <label for="first_upload">
                        <svg width="39" height="34" fill="none"><path d="M0 4.857C0 3.57.514 2.334 1.428 1.423A4.884 4.884 0 0 1 4.875 0h29.25c1.293 0 2.533.512 3.447 1.423A4.848 4.848 0 0 1 39 4.857v24.286a4.848 4.848 0 0 1-1.428 3.434A4.884 4.884 0 0 1 34.125 34H4.875a4.884 4.884 0 0 1-3.447-1.423A4.848 4.848 0 0 1 0 29.143V4.857Zm2.438 21.857v2.429c0 .644.256 1.262.713 1.717a2.442 2.442 0 0 0 1.724.711h29.25c.647 0 1.267-.255 1.724-.71a2.424 2.424 0 0 0 .714-1.718v-8.5l-9.207-4.729a1.223 1.223 0 0 0-1.406.226l-9.043 9.01-6.484-4.303a1.222 1.222 0 0 0-1.536.15l-6.45 5.717ZM14.624 10.93c0-.967-.385-1.893-1.07-2.576a3.663 3.663 0 0 0-5.172 0 3.636 3.636 0 0 0 0 5.152 3.663 3.663 0 0 0 5.171 0 3.636 3.636 0 0 0 1.071-2.576Z" fill="#37455D"/></svg>
                            Ladda upp fil
                        </label>
                        <input type="file" id="first_upload" class="hidden">
                    </form>
                    <form>
                        <label for="second_upload">
                        <svg width="39" height="34" fill="none"><path d="M0 4.857C0 3.57.514 2.334 1.428 1.423A4.884 4.884 0 0 1 4.875 0h29.25c1.293 0 2.533.512 3.447 1.423A4.848 4.848 0 0 1 39 4.857v24.286a4.848 4.848 0 0 1-1.428 3.434A4.884 4.884 0 0 1 34.125 34H4.875a4.884 4.884 0 0 1-3.447-1.423A4.848 4.848 0 0 1 0 29.143V4.857Zm2.438 21.857v2.429c0 .644.256 1.262.713 1.717a2.442 2.442 0 0 0 1.724.711h29.25c.647 0 1.267-.255 1.724-.71a2.424 2.424 0 0 0 .714-1.718v-8.5l-9.207-4.729a1.223 1.223 0 0 0-1.406.226l-9.043 9.01-6.484-4.303a1.222 1.222 0 0 0-1.536.15l-6.45 5.717ZM14.624 10.93c0-.967-.385-1.893-1.07-2.576a3.663 3.663 0 0 0-5.172 0 3.636 3.636 0 0 0 0 5.152 3.663 3.663 0 0 0 5.171 0 3.636 3.636 0 0 0 1.071-2.576Z" fill="#37455D"/></svg>
                            Ladda upp fil
                        </label>
                        <input type="file" id="second_upload" class="hidden">
                    </form>
                    <form>
                        <label for="third_upload">
                        <svg width="39" height="34" fill="none"><path d="M0 4.857C0 3.57.514 2.334 1.428 1.423A4.884 4.884 0 0 1 4.875 0h29.25c1.293 0 2.533.512 3.447 1.423A4.848 4.848 0 0 1 39 4.857v24.286a4.848 4.848 0 0 1-1.428 3.434A4.884 4.884 0 0 1 34.125 34H4.875a4.884 4.884 0 0 1-3.447-1.423A4.848 4.848 0 0 1 0 29.143V4.857Zm2.438 21.857v2.429c0 .644.256 1.262.713 1.717a2.442 2.442 0 0 0 1.724.711h29.25c.647 0 1.267-.255 1.724-.71a2.424 2.424 0 0 0 .714-1.718v-8.5l-9.207-4.729a1.223 1.223 0 0 0-1.406.226l-9.043 9.01-6.484-4.303a1.222 1.222 0 0 0-1.536.15l-6.45 5.717ZM14.624 10.93c0-.967-.385-1.893-1.07-2.576a3.663 3.663 0 0 0-5.172 0 3.636 3.636 0 0 0 0 5.152 3.663 3.663 0 0 0 5.171 0 3.636 3.636 0 0 0 1.071-2.576Z" fill="#37455D"/></svg>
                            Ladda upp fil
                        </label>
                        <input type="file" id="third_upload" class="hidden">
                    </form>
                    <form>
                        <label for="forth_upload">
                        <svg width="39" height="34" fill="none"><path d="M0 4.857C0 3.57.514 2.334 1.428 1.423A4.884 4.884 0 0 1 4.875 0h29.25c1.293 0 2.533.512 3.447 1.423A4.848 4.848 0 0 1 39 4.857v24.286a4.848 4.848 0 0 1-1.428 3.434A4.884 4.884 0 0 1 34.125 34H4.875a4.884 4.884 0 0 1-3.447-1.423A4.848 4.848 0 0 1 0 29.143V4.857Zm2.438 21.857v2.429c0 .644.256 1.262.713 1.717a2.442 2.442 0 0 0 1.724.711h29.25c.647 0 1.267-.255 1.724-.71a2.424 2.424 0 0 0 .714-1.718v-8.5l-9.207-4.729a1.223 1.223 0 0 0-1.406.226l-9.043 9.01-6.484-4.303a1.222 1.222 0 0 0-1.536.15l-6.45 5.717ZM14.624 10.93c0-.967-.385-1.893-1.07-2.576a3.663 3.663 0 0 0-5.172 0 3.636 3.636 0 0 0 0 5.152 3.663 3.663 0 0 0 5.171 0 3.636 3.636 0 0 0 1.071-2.576Z" fill="#37455D"/></svg>
                            Ladda upp fil
                        </label>
                        <input type="file" id="forth_upload" class="hidden">
                    </form>
                </div>
            </div>
            <div class="form-container">
                @if ($errors->any())
                <p>
                    <p class="error">{{ $errors->first() }}</p>
                </p>
                @endif

                <div class="ad-form">
                    <form method="view" action="{{ route('preview') }}">
                        @csrf
                        <div>
                            <label for="adress">Adress <span class="helper">(Används som titel på annonsen)</span></label><br>
                            <input name="adress" id="adress" type="adress" placeholder="Ange adress" value="{{ old('adress') }}"/>
                        </div>
                        <div>
                            <p>Möblerat/Omöblerat</p>
                            <div class="checkboxes">
                                <label class="check-container">
                                    <span>Möblerat</span>
                                    <input type="radio" name="furniture" class="hidden" checked>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check-container">
                                    <span>Omöblerat</span>
                                    <input type="radio" name="furniture" class="hidden">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <p>Vilken typ av bostad?</p>
                            <div class="checkboxes">
                                <label class="check-container">
                                    <span>Lägenheten</span>
                                    <input type="radio" name="type-of-living" class="hidden" checked>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check-container">
                                    <span>Parhus</span>
                                    <input type="radio" name="type-of-living" class="hidden">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check-container">
                                    <span>Villa</span>
                                    <input type="radio" name="type-of-living" class="hidden">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="check-container">
                                    <span>Radhus</span>
                                    <input type="radio" name="type-of-living" class="hidden">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label for="rent">Önskad hyra</label>
                            <input name="rent" id="rent" type="rent" placeholder="Ange önskat pris" value="{{ old('rent') }}"  />
                        </div>
                        <div>
                            <label for="rooms">Hur många rum ska hyras ut?</label>
                            <input name="rooms" id="rooms" type="rooms" placeholder="Ange antal rum" value="{{ old('rooms') }}" />
                        </div>
                        <div>
                            <label for="space">Hur stor yta?</label>
                            <input name="space" id="space" type="space" placeholder="Ange yta" value="{{ old('space') }}" />
                        </div>
                        <div>
                            <label for="floor">Våning</label>
                            <input name="floor" id="floor" type="floor" placeholder="Ange våning" value="{{ old('floor') }}" />
                        </div>
                        <div>
                            <label for="extra_info">Extra information, allergier, etc.</label>
                            <textarea name="extra_info" id="extra_info" cols="30" rows="10"></textarea>
                        </div>
                        <div class="buttons-container">
                            <div class="slogan">
                                <h2>Kollektiva</h2>
                                <p>Där dina drömmar blir verklighet</p>
                            </div>
                            <a href="{{ route('preview') }}" class="button" type="submit">Förhandsgranska annons</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.footer')
