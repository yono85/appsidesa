<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <a href="#">Help?</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y', time()) === '2024' ? '2024' : '2024 - ' . date('Y', time()) . " " . env('APP_NAME')}} </strong> All rights reserved.
  </footer>