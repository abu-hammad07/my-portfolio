@include('layouts.header')

<div class="site site-black">

    @include('layouts.navbar')

    <!--:::::WELCOME ATRA START :::::::-->
    {{--  @include('components.welcome-carousel')  --}}
    @component('components.welcome-carousel')@endcomponent
    <!--:::::WELCOME AREA END :::::::-->

    <!--:::::ABOUT AREA START :::::::-->
    {{--  @include('components.about')  --}}
    @component('components.about')@endcomponent
    <!--:::::ABOUT AREA END :::::::-->

    <!--:::::SKILL AREA START :::::::-->
    {{--  @include('components.skills-experience')  --}}
    @component('components.skills-experience')@endcomponent
    <!--:::::SKILL AREA END :::::::-->

    <!--:::::SERVICE AREA START :::::::-->
    {{--  @include('components.services')  --}}
    @component('components.services')@endcomponent
    <!--:::::SERVICE AREA END :::::::-->

    <!--:::::PROJECT AREA START :::::::-->
    {{--  @include('components.projects')  --}}
    @component('components.projects')@endcomponent
    <!--:::::PROJECT AREA END :::::::-->


    @include('layouts.subscribe-home')


    <!--:::::FOOTER AREA START :::::::-->
    @include('layouts.footer')
    <!--:::::FOOTER AREA END :::::::-->

</div>
<!--:::::sitea area end :::::::-->


@include('layouts.scripts')
