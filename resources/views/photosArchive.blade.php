@extends('layouts.base')

@section('pageTitle')
    <div class="grid grid-flow-col auto-cols-max h-40">
        <svg width="120" height="70" class="rotate-45 place-self-end" viewBox="0 0 622 268" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" class="fill-bg dark:fill-white" clip-rule="evenodd" d="M267.978 15.7175C273.561 9.90622 278.211 3.61749 278.211 1.75998C278.211 -0.798767 279.142 -0.567474 282.398 2.45377C285.421 5.48248 286.352 9.90625 285.887 19.9099C285.654 32.7112 278.211 58.5373 273.793 62.961C271.699 65.0497 241 68.3098 241 66.4448C241 65.9823 244.721 56.6723 249.373 45.7361C254.955 32.9424 261.234 22.4687 267.978 15.7175ZM122.856 65.114C117.749 47.65 117.284 43.2224 118.677 23.6602C119.605 11.7811 121.231 2 122.391 2C123.32 2 127.964 5.26288 132.606 9.22009C143.75 19.0012 156.519 46.4852 171.841 92.8295L172.257 94.0747L172.259 94.0809C184.611 131.033 184.685 131.252 191.343 130.558C194.825 130.326 208.29 134.052 221.523 139.413C234.524 144.535 246.364 148.724 247.989 148.724C249.614 148.962 254.721 150.822 259.133 153.383C264.937 156.414 266.33 158.042 263.776 158.975C241.954 166.889 203.647 179 200.861 179C195.289 179 153.965 162.932 150.947 159.669C149.554 158.042 143.982 140.578 138.643 120.777C137.977 118.411 137.291 115.969 136.594 113.484L134.578 106.293L134.325 105.387L134.303 105.306L134.198 104.932C129.763 89.1034 125.278 73.0988 122.856 65.114ZM605.875 39.2975C577.049 60.4383 528.927 78.8006 502.658 78.8006C495.219 78.8006 480.806 74.3832 446.4 61.3694C431.29 55.5591 428.267 55.0972 404.555 56.2593C358.526 58.5835 302.732 65.0866 280.415 70.897C268.559 73.9213 256.471 76.4764 253.681 76.7073C251.361 76.7073 250.144 76.7073 250.078 76.9815C250.006 77.2843 251.34 77.9215 254.146 79.2624C260.655 82.5177 262.515 89.4827 261.121 106.214L259.726 119.458L298.548 119.689C333.419 119.928 339.463 120.62 360.385 126.431C373.171 130.148 390.142 133.403 398.278 134.096C411.529 134.796 414.086 134.096 427.802 126.662C436.171 122.013 443.61 118.296 444.075 118.296C444.773 118.296 445.237 120.389 445.237 122.714C445.237 128.524 429.429 137.582 412.924 141.538C403.161 143.854 397.116 143.854 383.865 141.538C368.29 138.975 365.964 139.214 340.625 145.717C292.969 158.03 239.268 175.461 183.707 196.602C137.213 214.264 135.121 215.195 128.611 218.212C122.799 220.998 121.405 220.306 103.969 206.361C65.8442 175.923 24.6968 149.665 11.2129 147.11C1.91405 145.255 -2.50246 147.579 1.4492 152.22C3.07664 154.082 8.65574 162.909 13.771 171.744C21.2095 184.289 31.4385 195.209 62.8218 223.792L102.342 260.04H116.755C135.818 260.04 190.682 250.512 238.338 238.891C280.183 228.671 291.109 224.954 317.378 213.102C348.995 198.464 374.334 188.468 375.961 189.399C380.843 192.423 376.658 196.833 364.57 201.951C357.131 204.737 345.275 209.847 338.3 213.102C295.991 232.157 280.88 237.498 245.312 246.326C223.459 251.905 206.49 257.015 207.419 257.946C208.582 258.878 224.622 261.894 243.452 264.449C246.95 264.949 250.062 265.419 252.871 265.843C262.848 267.35 269.01 268.28 275.097 267.924C284.928 267.349 294.562 263.418 319.76 253.138L323.758 251.507C326.493 250.393 329.397 249.21 332.489 247.957C396.186 222.399 424.78 214.495 491.964 204.037C499.403 202.874 509.865 201.02 515.211 199.627C520.791 198.234 530.787 196.14 537.063 194.978C555.197 191.723 567.285 186.151 572.632 178.948C582.628 165.234 598.436 132.472 606.572 108.307C617.731 75.076 625.636 29.77 620.289 30.0009C619.126 30.2318 612.85 34.4183 605.875 39.2975ZM47.8164 76.7048C50.8349 66.6739 52.2285 57.3386 51.2993 53.8378C49.9062 48.2426 50.1382 48.0032 55.7109 50.5764C58.9614 51.9752 63.6055 55.9398 66.1597 59.4405C70.8037 65.7388 88.6816 116.604 95.8799 143.668C100.755 162.106 101.917 163.505 108.186 159.773C113.294 156.504 120.492 158.374 165.305 175.167C185.041 182.4 187.595 184.734 180.165 187.771C159.732 196.635 127.922 209 125.368 209C123.51 209 115.848 203.869 107.721 197.57C99.8271 191.504 84.27 179.835 73.1255 171.906C61.98 164.201 52.4609 155.808 51.7641 153.474C51.2993 151.372 48.978 136.906 46.6553 121.504C42.9409 93.7373 42.9409 93.2735 47.8164 76.7048ZM220 128.176C220 128.41 234.213 133.83 251.922 139.953C283.38 151.255 283.845 151.255 297.36 148.432C305.05 146.778 313.905 144.423 316.934 143.011C322.526 140.421 321.594 139.953 304.584 134.532C289.904 130.055 280.118 128.885 253.321 128.176C234.913 127.941 220 127.941 220 128.176ZM241.61 120C255.187 120 258 118.389 258 105.085C258 91.7814 257.529 81 243.951 81C230.373 81 210 90.6342 210 103.938C210 117.242 228.031 120 241.61 120Z" fill="white"/>
        </svg>
        <h1 class="place-self-center text-bg">
            Our archive gallery
        </h1>
        <svg width="120" height="70" class="rotate-45 place-self-start" viewBox="0 0 622 267" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" class="fill-bg dark:fill-white" clip-rule="evenodd" d="M16.1246 228.705C44.9507 207.56 93.0728 189.204 119.342 189.204C126.781 189.204 141.194 193.618 175.6 206.631C190.71 212.439 193.732 212.904 217.445 211.743C263.474 209.419 319.268 202.913 341.585 197.104C353.441 194.083 365.529 191.527 368.319 191.295C370.639 191.295 371.856 191.295 371.922 191.021C371.994 190.718 370.66 190.08 367.854 188.739C361.345 185.486 359.485 178.515 360.88 161.785L362.274 148.541L323.452 148.308C288.581 148.076 282.537 147.379 261.615 141.57C248.829 137.852 231.858 134.599 223.722 133.902C210.471 133.204 207.914 133.902 194.198 141.337C185.829 145.984 178.39 149.702 177.924 149.702C177.228 149.702 176.763 147.611 176.763 145.288C176.763 139.478 192.571 130.416 209.076 126.467C218.839 124.142 224.884 124.142 238.135 126.467C253.71 129.022 256.036 128.79 281.375 122.284C329.032 109.969 382.732 92.5415 438.293 71.3969C484.787 53.7378 486.879 52.8081 493.389 49.7875C499.201 46.9993 500.595 47.6958 518.031 61.6377C556.156 92.0766 597.304 118.334 610.787 120.889C620.086 122.749 624.502 120.425 620.551 115.778C618.923 113.919 613.344 105.089 608.23 96.2594C600.791 83.7119 590.562 72.7914 559.178 44.211L519.658 7.96244H505.245C486.182 7.96244 431.318 17.4892 383.662 29.107C341.817 39.331 330.891 43.0489 304.622 54.8991C273.005 69.5383 247.666 79.5292 246.039 78.6003C241.157 75.5796 245.341 71.1645 257.43 66.0529C264.869 63.2646 276.725 58.1522 283.699 54.8991C326.009 35.8456 341.12 30.5015 376.689 21.672C398.541 16.0947 415.51 10.9831 414.581 10.0534C413.418 9.12452 397.378 6.10387 378.548 3.54729C375.054 3.04844 371.945 2.57933 369.138 2.15578C359.156 0.649525 352.993 -0.28059 346.904 0.076176C337.075 0.652134 327.443 4.58194 302.261 14.8559L302.251 14.8599C298.389 16.4355 294.161 18.1603 289.511 20.0451C225.814 45.6048 197.22 53.5054 130.035 63.9611C122.597 65.1232 112.135 66.9817 106.789 68.3762C101.21 69.77 91.2129 71.8617 84.9366 73.0231C66.8033 76.2761 54.7149 81.8533 49.3682 89.056C39.3716 102.765 23.5635 135.529 15.4273 159.694C4.2686 192.922 -3.6357 238.232 1.71147 237.999C2.87406 237.767 9.15092 233.585 16.1246 228.705ZM499.144 202.886C504.251 220.352 504.716 224.778 503.323 244.34C502.394 256.218 500.769 266 499.608 266C498.68 266 494.037 262.739 489.394 258.78C478.25 248.998 465.481 221.517 450.158 175.171L449.739 173.918L449.738 173.912C437.389 136.971 437.315 136.751 430.658 137.442C427.175 137.675 413.71 133.949 400.477 128.592C387.476 123.469 375.636 119.277 374.011 119.277C372.386 119.044 367.279 117.181 362.867 114.618C357.064 111.591 355.67 109.961 358.224 109.029C380.047 101.111 418.353 89 421.139 89C426.711 89 468.035 105.07 471.053 108.33C472.445 109.961 478.018 127.428 483.357 147.224C484.726 152.085 486.178 157.27 487.639 162.484L487.644 162.501C492.129 178.514 496.693 194.806 499.144 202.886ZM354.022 251.279C348.439 257.097 343.789 263.379 343.789 265.24C343.789 267.8 342.858 267.567 339.602 264.542C336.579 261.517 335.648 257.097 336.113 247.091C336.346 234.293 343.789 208.465 348.208 204.044C350.301 201.95 381 198.692 381 200.554C381 201.019 377.279 210.326 372.627 221.263C367.046 234.061 360.767 244.532 354.022 251.279ZM574.183 190.468C571.165 200.438 569.771 209.713 570.7 213.191C572.093 218.755 571.861 218.987 566.289 216.437C563.038 215.045 558.394 211.104 555.84 207.626C551.196 201.366 533.318 150.819 526.12 123.922C521.244 105.605 520.083 104.214 513.814 107.923C508.706 111.169 501.508 109.315 456.695 92.6203C436.96 85.433 434.405 83.1138 441.835 80.0996C462.268 71.2888 494.078 59 496.632 59C498.49 59 506.152 64.1008 514.278 70.3611C522.173 76.3896 537.73 87.9834 548.875 95.8665C560.02 103.518 569.54 111.865 570.235 114.184C570.7 116.271 573.022 130.646 575.344 145.949C579.059 173.542 579.059 174.005 574.183 190.468ZM402 138.823C402 138.588 387.928 133.171 370.397 127.048C339.254 115.744 338.793 115.744 325.413 118.57C317.8 120.219 309.034 122.574 306.035 123.986C300.499 126.577 301.422 127.048 318.262 132.465C332.795 136.939 342.484 138.117 369.012 138.823C387.236 139.059 402 139.059 402 138.823ZM381.049 147C367.754 147 365 148.65 365 162.294C365 175.939 365.461 187 378.756 187C392.052 187 412 177.115 412 163.471C412 149.826 394.344 147 381.049 147Z" fill="white"/>
        </svg>
    </div>
@endsection

@section('content')
    <div class="gap-2 grid grid-cols-4 grid-rows-10 ">
        <div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div><div class="">
            <a href="">
                <img src="{{ asset($photos[0]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[1]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[2]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
        <div class="">
            <a href="">
                <img src="{{ asset($photos[3]->pathToPhoto) }}" alt="photo" class="object-contain rounded-md select-none">
            </a>
        </div>
    </div>
@endsection
