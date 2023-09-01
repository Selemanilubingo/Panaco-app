<!DOCTYPE html>
<html lang="en">

{{-- pour appeler head --}}
@include('partials.head')
<!--
  HOW TO USE:
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <div class="wrapper">

        {{-- pour appeler sidebar  --}}
        @include('partials.sidebar')

        <div class="main">

            {{-- pour appeler header --}}
            @include('partials.header')

            <main class="content">
                {{-- content --}}
                @yield('content')
            </main>

            {{-- pour appeler footer --}}
            @include('partials.footer')
        </div>
    </div>

    {{-- pour appeler script  --}}
    @include('partials.scripts')
</body>

</html>
