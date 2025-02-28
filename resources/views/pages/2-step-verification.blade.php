<!doctype html> 
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-socials.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/tabler-marketing.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="{{ asset('assets/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="32" viewBox="0 0 232 68"
                        class="navbar-brand-image">
                        <path
                            d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
                            fill="#066fd1" style="fill: var(--tblr-primary, #066fd1)" />
                        <path
                            d="M105.8 46.1c.4 0 .9.2 1.2.6s.6 1 .6 1.7c0 .9-.5 1.6-1.4 2.2s-2 .9-3.2.9c-2 0-3.7-.4-5-1.3s-2-2.6-2-5.4V31.6h-2.2c-.8 0-1.4-.3-1.9-.8s-.9-1.1-.9-1.9c0-.7.3-1.4.8-1.8s1.2-.7 1.9-.7h2.2v-3.1c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v3.1h3.4c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.4-.8 1.8-1.2.7-1.9.7h-3.4v13c0 .7.2 1.2.5 1.5s.8.5 1.4.5c.3 0 .6-.1 1.1-.2.5-.2.8-.3 1.2-.3zm28-20.7c.8 0 1.5.3 2.1.8.5.5.8 1.2.8 2.1v20.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2-.8-.8-1.2-.8-2.1c-.8.9-1.9 1.7-3.2 2.4-1.3.7-2.8 1-4.3 1-2.2 0-4.2-.6-6-1.7-1.8-1.1-3.2-2.7-4.2-4.7s-1.6-4.3-1.6-6.9c0-2.6.5-4.9 1.5-6.9s2.4-3.6 4.2-4.8c1.8-1.1 3.7-1.7 5.9-1.7 1.5 0 3 .3 4.3.8 1.3.6 2.5 1.3 3.4 2.1 0-.8.3-1.5.8-2.1.5-.5 1.2-.7 2-.7zm-9.7 21.3c2.1 0 3.8-.8 5.1-2.3s2-3.4 2-5.7-.7-4.2-2-5.8c-1.3-1.5-3-2.3-5.1-2.3-2 0-3.7.8-5 2.3-1.3 1.5-2 3.5-2 5.8s.6 4.2 1.9 5.7 3 2.3 5.1 2.3zm32.1-21.3c2.2 0 4.2.6 6 1.7 1.8 1.1 3.2 2.7 4.2 4.7s1.6 4.3 1.6 6.9-.5 4.9-1.5 6.9-2.4 3.6-4.2 4.8c-1.8 1.1-3.7 1.7-5.9 1.7-1.5 0-3-.3-4.3-.9s-2.5-1.4-3.4-2.3v.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.5-.8-1.2-.8-2.1V18.9c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v10c.8-1 1.8-1.8 3.2-2.5 1.3-.7 2.8-1 4.3-1zm-.7 21.3c2 0 3.7-.8 5-2.3s2-3.5 2-5.8-.6-4.2-1.9-5.7-3-2.3-5.1-2.3-3.8.8-5.1 2.3-2 3.4-2 5.7.7 4.2 2 5.8c1.3 1.6 3 2.3 5.1 2.3zm23.6 1.9c0 .8-.3 1.5-.8 2.1s-1.3.8-2.1.8-1.5-.3-2-.8-.8-1.3-.8-2.1V18.9c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v29.7zm29.3-10.5c0 .8-.3 1.4-.9 1.9-.6.5-1.2.7-2 .7h-15.8c.4 1.9 1.3 3.4 2.6 4.4 1.4 1.1 2.9 1.6 4.7 1.6 1.3 0 2.3-.1 3.1-.4.7-.2 1.3-.5 1.8-.8.4-.3.7-.5.9-.6.6-.3 1.1-.4 1.6-.4.7 0 1.2.2 1.7.7s.7 1 .7 1.7c0 .9-.4 1.6-1.3 2.4-.9.7-2.1 1.4-3.6 1.9s-3 .8-4.6.8c-2.7 0-5-.6-7-1.7s-3.5-2.7-4.6-4.6-1.6-4.2-1.6-6.6c0-2.8.6-5.2 1.7-7.2s2.7-3.7 4.6-4.8 3.9-1.7 6-1.7 4.1.6 6 1.7 3.4 2.7 4.5 4.7c.9 1.9 1.5 4.1 1.5 6.3zm-12.2-7.5c-3.7 0-5.9 1.7-6.6 5.2h12.6v-.3c-.1-1.3-.8-2.5-2-3.5s-2.5-1.4-4-1.4zm30.3-5.2c1 0 1.8.3 2.4.8.7.5 1 1.2 1 1.9 0 1-.3 1.7-.8 2.2-.5.5-1.1.8-1.8.7-.5 0-1-.1-1.6-.3-.2-.1-.4-.1-.6-.2-.4-.1-.7-.1-1.1-.1-.8 0-1.6.3-2.4.8s-1.4 1.3-1.9 2.3-.7 2.3-.7 3.7v11.4c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.6-.8-1.3-.8-2.1V28.8c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v.6c.7-1.3 1.8-2.3 3.2-3 1.3-.7 2.8-1 4.3-1z"
                            fill-rule="evenodd" clip-rule="evenodd" fill="#4a4a4a" />
                    </svg>
                </a>
            </div>
            <form class="card card-md" action="./2-step-verification-code.html" method="get" autocomplete="off"
                novalidate>
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">2-Step Verification</h2>
                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <select class="form-select">
                            <option value="">Andorra</option>
                            <option value="">United Arab Emirates</option>
                            <option value="">Afghanistan</option>
                            <option value="">Antigua</option>
                            <option value="">Anguilla</option>
                            <option value="">Armenia</option>
                            <option value="">Angolan</option>
                            <option value="">Antarctica</option>
                            <option value="">Argentina</option>
                            <option value="">American Samoa</option>
                            <option value="">Austria</option>
                            <option value="">Australia</option>
                            <option value="">Aruba</option>
                            <option value="">Aslan Islands</option>
                            <option value="">Azerbaijan</option>
                            <option value="">Bosnian</option>
                            <option value="">Barbados</option>
                            <option value="">Belgium</option>
                            <option value="">Burkina Faso</option>
                            <option value="">Bulgaria</option>
                            <option value="">Bahrain</option>
                            <option value="">Burundi</option>
                            <option value="">Benin</option>
                            <option value="">Saint-Barthélemy</option>
                            <option value="">Bermuda</option>
                            <option value="">Bruneian</option>
                            <option value="">Bolivia</option>
                            <option value="">Bonaire</option>
                            <option value="">Brazil</option>
                            <option value="">Bahamas</option>
                            <option value="">Bhutan</option>
                            <option value="">Bouvet Island</option>
                            <option value="">Batswana</option>
                            <option value="">Belarus</option>
                            <option value="">Belize</option>
                            <option value="">Canada</option>
                            <option value="">Cocos Island</option>
                            <option value="">Democratic Republic of Congo</option>
                            <option value="">Central African Republic</option>
                            <option value="">Republic of the Congo</option>
                            <option value="">Switzerland</option>
                            <option value="">Ivory Coast</option>
                            <option value="">Cook Island</option>
                            <option value="">Chile</option>
                            <option value="">Cameroon</option>
                            <option value="">China</option>
                            <option value="">Colombia</option>
                            <option value="">Costa Rica</option>
                            <option value="">Cuba</option>
                            <option value="">Cape Verde</option>
                            <option value="">Curacao</option>
                            <option value="">Christmas Island</option>
                            <option value="">Cyprus</option>
                            <option value="">Czech Republic</option>
                            <option value="">Germany</option>
                            <option value="">Djibouti</option>
                            <option value="">Denmark</option>
                            <option value="">Dominica</option>
                            <option value="">Dominican Republic</option>
                            <option value="">Algeria</option>
                            <option value="">Ecuador</option>
                            <option value="">Estonia</option>
                            <option value="">Egypt</option>
                            <option value="">Sahrawi</option>
                            <option value="">Eritrea</option>
                            <option value="">Spain</option>
                            <option value="">Ethiopia</option>
                            <option value="">European Union</option>
                            <option value="">Finland</option>
                            <option value="">Fiji</option>
                            <option value="">Falkland Islands</option>
                            <option value="">Federate States of Micronesia</option>
                            <option value="">Faroe Islands</option>
                            <option value="">France</option>
                            <option value="">Gabon</option>
                            <option value="">Great Britain</option>
                            <option value="">England</option>
                            <option value="">Nothern Ireland</option>
                            <option value="">Scotland</option>
                            <option value="">Wales</option>
                            <option value="">Grenada</option>
                            <option value="">Georgia</option>
                            <option value="">Guyana</option>
                            <option value="">Guernsey</option>
                            <option value="">Ghana</option>
                            <option value="">Gibraltar</option>
                            <option value="">Greenland</option>
                            <option value="">Gambia</option>
                            <option value="">Guinea</option>
                            <option value="">Guadeloupe</option>
                            <option value="">Equatorial Guinea</option>
                            <option value="">Greece</option>
                            <option value="">South Georgia</option>
                            <option value="">Guatemala</option>
                            <option value="">Guam</option>
                            <option value="">Guinea-Bissau</option>
                            <option value="">Guyana</option>
                            <option value="">Hong Kong</option>
                            <option value="">Heard and McDonald Islands</option>
                            <option value="">Honduras</option>
                            <option value="">Croatia</option>
                            <option value="">Haiti</option>
                            <option value="">Hungary</option>
                            <option value="">Indonesia</option>
                            <option value="">Ireland</option>
                            <option value="">Israel</option>
                            <option value="">Isle of Man</option>
                            <option value="">India</option>
                            <option value="">British Indian Ocean Territory</option>
                            <option value="">Iraq</option>
                            <option value="">Iran</option>
                            <option value="">Iceland</option>
                            <option value="">Italy</option>
                            <option value="">Jersey</option>
                            <option value="">Jamaica</option>
                            <option value="">Jordan</option>
                            <option value="">Japan</option>
                            <option value="">Kenya</option>
                            <option value="">Kyrgyzstan</option>
                            <option value="">Cambodia</option>
                            <option value="">Kiribati</option>
                            <option value="">Comoros</option>
                            <option value="">Saint Kitts and Nevis</option>
                            <option value="">North Korea</option>
                            <option value="">South Korea</option>
                            <option value="">Kuwait</option>
                            <option value="">Cayman Islands</option>
                            <option value="">Kazakhstan</option>
                            <option value="">Laos</option>
                            <option value="">Lebanese</option>
                            <option value="">Saint Lucia</option>
                            <option value="">Liechtenstein</option>
                            <option value="">Sri Lanka</option>
                            <option value="">Liberia</option>
                            <option value="">Lesotho</option>
                            <option value="">Lithuania</option>
                            <option value="">Luxembourg</option>
                            <option value="">Latvia</option>
                            <option value="">Libya</option>
                            <option value="">Morocco</option>
                            <option value="">Monaco</option>
                            <option value="">Moldova</option>
                            <option value="">Montenegro</option>
                            <option value="">Saint Martin</option>
                            <option value="">Madagascar</option>
                            <option value="">Marshall Islands</option>
                            <option value="">Macedonia</option>
                            <option value="">Mali</option>
                            <option value="">Myanmar</option>
                            <option value="">Mongolia</option>
                            <option value="">Macao</option>
                            <option value="">Nothern Mariana Islands</option>
                            <option value="">Martinique</option>
                            <option value="">Mauritania</option>
                            <option value="">Montserrat</option>
                            <option value="">Malta</option>
                            <option value="">Mauritius</option>
                            <option value="">Maldives</option>
                            <option value="">Malawi</option>
                            <option value="">Mexico</option>
                            <option value="">Malaysia</option>
                            <option value="">Mozambique</option>
                            <option value="">Namibia</option>
                            <option value="">New Caledonia</option>
                            <option value="">Niger</option>
                            <option value="">Norfolk Island</option>
                            <option value="">Nigeria</option>
                            <option value="">Nicaragua</option>
                            <option value="">Norway</option>
                            <option value="">Nepal</option>
                            <option value="">Nauruan</option>
                            <option value="">Niger</option>
                            <option value="">New Zealand</option>
                            <option value="">Oman</option>
                            <option value="">Panama</option>
                            <option value="">Peru</option>
                            <option value="">French Polynesia</option>
                            <option value="">Papua New Guinea</option>
                            <option value="">Philippines</option>
                            <option value="">Pakistan</option>
                            <option value="">Poland</option>
                            <option value="">Saint Pierre</option>
                            <option value="">Pitcairn Islands</option>
                            <option value="">Puerto Rico</option>
                            <option value="">Palestine</option>
                            <option value="">Portugal</option>
                            <option value="">Palau</option>
                            <option value="">Paraguay</option>
                            <option value="">Qatar</option>
                            <option value="">Reunion Island</option>
                            <option value="">Romania</option>
                            <option value="">Serbia</option>
                            <option value="">Russia</option>
                            <option value="">Rwanda</option>
                            <option value="">Saudi Arabia</option>
                            <option value="">Solomon Islands</option>
                            <option value="">Seychelles</option>
                            <option value="">Sudan</option>
                            <option value="">Sweden</option>
                            <option value="">Singapore</option>
                            <option value="">Saint Helena</option>
                            <option value="">Slovenia</option>
                            <option value="">Svalbard Island</option>
                            <option value="">Slovakia</option>
                            <option value="">Sierra Leone</option>
                            <option value="">San Marino</option>
                            <option value="">Senegal</option>
                            <option value="">Somalia</option>
                            <option value="">Suriname</option>
                            <option value="">South Sudan</option>
                            <option value="">Sao Tome</option>
                            <option value="">El Salvador</option>
                            <option value="">Sint Maarten</option>
                            <option value="">Syria</option>
                            <option value="">Swaziland</option>
                            <option value="">Turks and Caicos</option>
                            <option value="">Chad</option>
                            <option value="">French Southern and Antarctic Lands</option>
                            <option value="">Togo</option>
                            <option value="">Thailand</option>
                            <option value="">Tajikistan</option>
                            <option value="">Tokelau</option>
                            <option value="">Timor Leste</option>
                            <option value="">Turkmenistan</option>
                            <option value="">Tunisia</option>
                            <option value="">Tonga</option>
                            <option value="">Turkey</option>
                            <option value="">Trinidad and Tobago</option>
                            <option value="">Tuvalu</option>
                            <option value="">Tanzania</option>
                            <option value="">Ukraine</option>
                            <option value="">Uganda</option>
                            <option value="">United States Minor Islands</option>
                            <option value="">United States of America</option>
                            <option value="">Uruguay</option>
                            <option value="">Uzbekistan</option>
                            <option value="">Vatican City</option>
                            <option value="">Saint Vincent</option>
                            <option value="">Venezuela</option>
                            <option value="">British Virgin Islands</option>
                            <option value="">Virgiin Islands</option>
                            <option value="">Vietnam</option>
                            <option value="">Vanuatu</option>
                            <option value="">Wallis and Futuna</option>
                            <option value="">Samoa</option>
                            <option value="">Yemen</option>
                            <option value="">South Africa</option>
                            <option value="">Zambia</option>
                            <option value="">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Your Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text">+1</span>
                            <input type="text" class="form-control" placeholder="Enter phone number" />
                        </div>
                    </div>
                    <div class="text-secondary">
                        Security is critical in Tabler. to help keep your account safe, we'll
                        text you a verification code when you sign in on a new device
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-5 w-100">
                            Send code
                        </button>
                    </div>
                </div>
            </form>
        </div> 
        <hr>
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="32" viewBox="0 0 232 68"
                        class="navbar-brand-image">
                        <path
                            d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
                            fill="#066fd1" style="fill: var(--tblr-primary, #066fd1)" />
                        <path
                            d="M105.8 46.1c.4 0 .9.2 1.2.6s.6 1 .6 1.7c0 .9-.5 1.6-1.4 2.2s-2 .9-3.2.9c-2 0-3.7-.4-5-1.3s-2-2.6-2-5.4V31.6h-2.2c-.8 0-1.4-.3-1.9-.8s-.9-1.1-.9-1.9c0-.7.3-1.4.8-1.8s1.2-.7 1.9-.7h2.2v-3.1c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v3.1h3.4c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.4-.8 1.8-1.2.7-1.9.7h-3.4v13c0 .7.2 1.2.5 1.5s.8.5 1.4.5c.3 0 .6-.1 1.1-.2.5-.2.8-.3 1.2-.3zm28-20.7c.8 0 1.5.3 2.1.8.5.5.8 1.2.8 2.1v20.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2-.8-.8-1.2-.8-2.1c-.8.9-1.9 1.7-3.2 2.4-1.3.7-2.8 1-4.3 1-2.2 0-4.2-.6-6-1.7-1.8-1.1-3.2-2.7-4.2-4.7s-1.6-4.3-1.6-6.9c0-2.6.5-4.9 1.5-6.9s2.4-3.6 4.2-4.8c1.8-1.1 3.7-1.7 5.9-1.7 1.5 0 3 .3 4.3.8 1.3.6 2.5 1.3 3.4 2.1 0-.8.3-1.5.8-2.1.5-.5 1.2-.7 2-.7zm-9.7 21.3c2.1 0 3.8-.8 5.1-2.3s2-3.4 2-5.7-.7-4.2-2-5.8c-1.3-1.5-3-2.3-5.1-2.3-2 0-3.7.8-5 2.3-1.3 1.5-2 3.5-2 5.8s.6 4.2 1.9 5.7 3 2.3 5.1 2.3zm32.1-21.3c2.2 0 4.2.6 6 1.7 1.8 1.1 3.2 2.7 4.2 4.7s1.6 4.3 1.6 6.9-.5 4.9-1.5 6.9-2.4 3.6-4.2 4.8c-1.8 1.1-3.7 1.7-5.9 1.7-1.5 0-3-.3-4.3-.9s-2.5-1.4-3.4-2.3v.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.5-.8-1.2-.8-2.1V18.9c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v10c.8-1 1.8-1.8 3.2-2.5 1.3-.7 2.8-1 4.3-1zm-.7 21.3c2 0 3.7-.8 5-2.3s2-3.5 2-5.8-.6-4.2-1.9-5.7-3-2.3-5.1-2.3-3.8.8-5.1 2.3-2 3.4-2 5.7.7 4.2 2 5.8c1.3 1.6 3 2.3 5.1 2.3zm23.6 1.9c0 .8-.3 1.5-.8 2.1s-1.3.8-2.1.8-1.5-.3-2-.8-.8-1.3-.8-2.1V18.9c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v29.7zm29.3-10.5c0 .8-.3 1.4-.9 1.9-.6.5-1.2.7-2 .7h-15.8c.4 1.9 1.3 3.4 2.6 4.4 1.4 1.1 2.9 1.6 4.7 1.6 1.3 0 2.3-.1 3.1-.4.7-.2 1.3-.5 1.8-.8.4-.3.7-.5.9-.6.6-.3 1.1-.4 1.6-.4.7 0 1.2.2 1.7.7s.7 1 .7 1.7c0 .9-.4 1.6-1.3 2.4-.9.7-2.1 1.4-3.6 1.9s-3 .8-4.6.8c-2.7 0-5-.6-7-1.7s-3.5-2.7-4.6-4.6-1.6-4.2-1.6-6.6c0-2.8.6-5.2 1.7-7.2s2.7-3.7 4.6-4.8 3.9-1.7 6-1.7 4.1.6 6 1.7 3.4 2.7 4.5 4.7c.9 1.9 1.5 4.1 1.5 6.3zm-12.2-7.5c-3.7 0-5.9 1.7-6.6 5.2h12.6v-.3c-.1-1.3-.8-2.5-2-3.5s-2.5-1.4-4-1.4zm30.3-5.2c1 0 1.8.3 2.4.8.7.5 1 1.2 1 1.9 0 1-.3 1.7-.8 2.2-.5.5-1.1.8-1.8.7-.5 0-1-.1-1.6-.3-.2-.1-.4-.1-.6-.2-.4-.1-.7-.1-1.1-.1-.8 0-1.6.3-2.4.8s-1.4 1.3-1.9 2.3-.7 2.3-.7 3.7v11.4c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.6-.8-1.3-.8-2.1V28.8c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v.6c.7-1.3 1.8-2.3 3.2-3 1.3-.7 2.8-1 4.3-1z"
                            fill-rule="evenodd" clip-rule="evenodd" fill="#4a4a4a" />
                    </svg>
                </a>
            </div>
            <form class="card card-md" action="./" method="get" autocomplete="off" novalidate>
                <div class="card-body">
                    <h2 class="card-title card-title-lg text-center mb-4">Authenticate Your Account</h2>
                    <p class="my-4 text-center">Please confirm your account by entering the authorization code sent to
                        <strong>+1 856-672-8552</strong>.
                    </p>
                    <div class="my-5">
                        <div class="row g-4">
                            <div class="col">
                                <div class="row g-2">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg text-center py-3"
                                            maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg text-center py-3"
                                            maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg text-center py-3"
                                            maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row g-2">
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg text-center py-3"
                                            maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg text-center py-3"
                                            maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control form-control-lg text-center py-3"
                                            maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            Dont't ask for codes again on this device
                        </label>
                    </div>
                    <div class="form-footer">
                        <div class="btn-list flex-nowrap">
                            <a href="/2-step-verification.html" class="btn btn-3 w-100">
                                Cancel
                            </a>
                            <a href="#" class="btn btn-primary btn-3 w-100">
                                Verify
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-center text-secondary mt-3">
                It may take a minute to receive your code. Haven't received it? <a href="./">Resend a new
                    code.</a>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var inputs = document.querySelectorAll('[data-code-input]');
                    // Attach an event listener to each input element
                    for (let i = 0; i < inputs.length; i++) {
                        inputs[i].addEventListener('input', function(e) {
                            // If the input field has a character, and there is a next input field, focus it
                            if (e.target.value.length === e.target.maxLength && i + 1 < inputs.length) {
                                inputs[i + 1].focus();
                            }
                        });
                        inputs[i].addEventListener('keydown', function(e) {
                            // If the input field is empty and the keyCode for Backspace (8) is detected, and there is a previous input field, focus it
                            if (e.target.value.length === 0 && e.keyCode === 8 && i > 0) {
                                inputs[i - 1].focus();
                            }
                        });
                    }
                });
            </script>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/demo.min.js') }}" defer></script>
</body>

</html>
