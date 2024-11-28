<style>
    footer {
        background-color: #f8f9fa; /* Light background for footer */
        /* padding: 1rem 0; Padding for better spacing */
        position: sticky; 
		gap: 100px;					/* Makes the footer stick at the bottom */
        bottom: 0;
        width: 100%;
    }

    .footer-container {
        display: flex;
        /* justify-content: space-between; */
        align-items: center;
		justify-content: space-between;
        flex-wrap: wrap;
        font-size: 0.9rem;
    }

    .footer-container a {
        text-decoration: none;
        color: #007bff; /* Link color */
    }

    .footer-container a:hover {
        text-decoration: underline;
    }

    .text-muted {
        color: #6c757d;
    }
</style>

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="footer-container">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<!-- External Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

<!-- Internal Scripts -->
<script src="<?php echo base_url('assets/admin_assets/js/scripts.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_assets/assets/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_assets/assets/demo/chart-bar-demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin_assets/js/datatables-simple-demo.js'); ?>"></script>
</body>
</html>
