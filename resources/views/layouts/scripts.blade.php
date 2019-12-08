<!-- Scripts -->
<script type="text/javascript" src="{{ asset(mix('js/manifest.js')) }}"></script>
<script type="text/javascript" src="{{ asset(mix('js/vendor.js')) }}"></script>
<script type="text/javascript" src="{{ asset(mix('js/app.js')) }}"></script>

<script type="text/javascript">
    window.locale = "{{ config('app.locale') }}";
    window.lang = @json (config('app.locale') === 'en' ? [] : json_decode(file_get_contents(resource_path(sprintf('lang/%s.json', config('app.locale')))), true));

    if (window.locale !== 'en') {
      $.extend($.fn.dataTable.defaults, {
        language: {
          url: "{{ asset('vendor/DataTables/ja.json') }}"
        }
      });
    }
</script>
