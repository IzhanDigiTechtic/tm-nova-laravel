<footer id="colophon" class="site-footer footer-primary py-4">
    <div class="container">
        <div class="row">
            <div class="copy-right col-md-7">Copyright &copy; <?php echo date("Y"); ?> | Powered By {{ config('var.websitename') }} Ltd. </div>
            <div class="footer-menu text-md-end col-md-5">
                <ul>
                    <li>
                       <a href="{{route('privacy.policy')}}"><span>Privacy Policy</span></a>
                    </li>
                    <li>
                       <a href="{{route('terms.and.conditions')}}"><span>Terms & Conditions</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast leadtoast" role="alert" aria-live="assertive" aria-atomic="true">
    </div>
</div>

