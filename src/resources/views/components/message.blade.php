<div id="message">
<!--  success message-->
@if ($message = Session::get('success'))
<div class="toast position-fixed bottom-0 end-0 mr-2 mb-2 rounded-0"  style="z-index: 11">
  <div class="toast-header">
  <span class="material-icons text-success">check_circle</span>
    <strong class="me-auto text-success">{{trans('flash::messages.success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    {{ $message }}
  </div>
</div>
@endif
@if ($message = Session::get('info'))
<!-- info message-->
<div class="toast position-fixed bottom-0 end-0 mr-2 mb-2 rounded-0"  style="z-index: 11">
  <div class="toast-header">
  <span class="material-icons text-info">info</span>
    <strong class="me-auto text-info">{{trans('flash::messages.info')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    {{ $message }}
  </div>
</div>
@endif
@if ($message = Session::get('warning'))
<!-- warning message -->
<div class="toast position-fixed bottom-0 end-0 mr-2 mb-2 rounded-0"  style="z-index: 11">
  <div class="toast-header">
  <span class="material-icons text-warning">warning_amber</span>
    <strong class="me-auto text-warning">{{trans('flash::messages.warning')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    {{ $message }}
  </div>
</div>
@endif
@if ($message = Session::get('error'))
<div class="toast position-fixed bottom-0 end-0 mr-2 mb-2 rounded-0"  style="z-index: 11">
  <div class="toast-header">
  <span class="material-icons text-danger">error_outline</span>
    <strong class="me-auto text-danger">{{trans('flash::messages.error')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    {{ $message }}
  </div>
</div>
@endif
<script>
window.onload = (event) => {
  let myAlert = document.querySelectorAll('.toast')[0];
  if (myAlert) {
    let bsAlert = new bootstrap.Toast(myAlert);
    bsAlert.show();
  }
};
  </script>