<footer class="main-footer">
<strong>Copyright &copy; {{ date('Y', time()) === '2024' ? '2024' : '2024 - ' . date('Y', time()) . " " . env('APP_NAME')}} </strong> All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>