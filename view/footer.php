    <footer class="footer" style="margin: 5em 0em 1em 0em;">
        <div class="container" style="padding-left: 0">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper" style="padding: 1em 2em;">
                    <h3><strong>Quick Links</strong></h3>
                    <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Partners</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper" style="padding: 1em 2em;">
                    <h3><strong>Follow Us:</strong></h3>
                    <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="row legal">
                All Rights Reserved Â©. Web Code Geeks 2015.
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="node_modules\bootstrap\js\src\jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="node_modules\bootstrap\js\src\popper.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <!-- <script src="js\home.js"></script> -->
    <script>

        $document).ready(function() {
            $('#login').click(function() {
                $('#loginModal').modal('show');
            });
        });

        // $('#loginModal').on('show.bs.modal', function(event) {
        //     var button = $(event.relatedTarget);
        //     var recipient = button.data('whatever');
        //     var modal = $(this);
        //     modal.find('.modal-title').text('New message to ' + recipient);
        //     modal.find('.modal-body input').val(recipient);
        // });
    </script>
</body>
</html>