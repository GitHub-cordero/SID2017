  <!-- Modal -->
  {{-- <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" href="">Editar</a> --}}
  <div class="modal fade" id="@yield('id-modal')" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">@yield('title-modal')</h4>
        </div>
        <div class="modal-body">
          @yield('body-modal')
          <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>