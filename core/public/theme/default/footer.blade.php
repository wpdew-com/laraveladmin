<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script> console.log('Hi!');
            $('#language').on('change', function() {
                var lang = $(this).find(":selected").val();
                window.location='/change-language/'+lang;
            });
        </script>


    </body>
</html>