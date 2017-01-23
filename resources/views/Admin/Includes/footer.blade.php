
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="{{ route('admin.dashboard') }}">
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;  <a href="http://christiawan.web.id/">HKM Mart</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    {{ Html::script('assets/admin/js/jquery-1.10.2.js') }}
    {{ Html::script('assets/admin/js/bootstrap.min.js') }}
    {{ Html::script('assets/admin/js/bootstrap-checkbox-radio.js') }}
    {{ Html::script('assets/admin/js/chartist.min.js') }}
    {{ Html::script('assets/admin/js/bootstrap-notify.js') }}
    {{ Html::script('assets/admin/js/paper-dashboard.js') }}
    {{ Html::script('assets/admin/js/demo.js') }}
    {{ Html::script('assets/admin/js/jquery-1.10.2.js') }}

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>
  </head>

</html>
