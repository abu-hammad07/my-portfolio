@include('layouts.header')

<div class="site site-black">

    @include('layouts.navbar')

    <!--:::::WELCOME ATRA START :::::::-->
    @include('components.welcome-carousel')
    <!--:::::WELCOME AREA END :::::::-->

    <!--:::::ABOUT AREA START :::::::-->
    @include('components.about')
    <!--:::::ABOUT AREA END :::::::-->

    <!--:::::SKILL AREA START :::::::-->
    @include('components.skills-experience')
    <!--:::::SKILL AREA END :::::::-->

    <!--:::::SERVICE AREA START :::::::-->
    @include('components.services')
    <!--:::::SERVICE AREA END :::::::-->

    <!--:::::PROJECT AREA START :::::::-->
    @include('components.projects')
    <!--:::::PROJECT AREA END :::::::-->


    @include('layouts.subscribe-home')


    <!--:::::FOOTER AREA START :::::::-->
    @include('layouts.footer')
    <!--:::::FOOTER AREA END :::::::-->

</div>
<!--:::::sitea area end :::::::-->


@include('layouts.scripts')
