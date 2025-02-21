<?= $this->include('layout/head'); ?>
</head>
<?= $this->include('layout/menu'); ?>

<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title">Invoice</h4>
    </div>
</div>
<!--End Page header-->

<!-- Row-->
<div class="row">
    <div class="col-md-12">
        <div class="card overflow-hidden">
            <div class="card-status bg-primary"></div>
            <div class="card-body">
                <h2 class="text-muted font-weight-bold">INVOICE</h2>
                <div>
                    <h5 class="mb-1">Hi <strong>Jessica Allen</strong>,</h5>
                    This is the receipt for a payment of <strong>$450.00</strong> (USD) for your works
                </div>

                <div class="card-body pl-0 pr-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <span>Payment No.</span><br>
                            <strong>INV23456-234</strong>
                        </div>
                        <div class="col-sm-6 text-right">
                            <span>Payment Date</span><br>
                            <strong>Aug 10, 2019 - 12:20 pm</strong>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="row pt-4">
                    <div class="col-lg-6 ">
                        <p class="h5 font-weight-bold">Bill From</p>
                        <address>
                            Street Address<br>
                            State, City<br>
                            Region, Postal Code<br>
                            ltd@example.com
                        </address>
                    </div>
                    <div class="col-lg-6 text-right">
                        <p class="h5 font-weight-bold">Bill To</p>
                        <address>
                            Street Address<br>
                            State, City<br>
                            Region, Postal Code<br>
                            ctr@example.com
                        </address>
                    </div>
                </div>
                <div class="table-responsive push">
                    <table class="table table-bordered table-hover text-nowrap">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Product</th>
                            <th class="text-center">Qnty</th>
                            <th class="text-right">Unit Price</th>
                            <th class="text-right">Amount</th>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <p class="font-weight-semibold mb-1">Logo Creation</p>
                                <div class="text-muted">Logo and business cards design</div>
                            </td>
                            <td class="text-center">2</td>
                            <td class="text-right">$60.00</td>
                            <td class="text-right">$120.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>
                                <p class="font-weight-semibold mb-1">Online Store Design &amp; Development</p>
                                <div class="text-muted">Design/Development for all popular modern browsers</div>
                            </td>
                            <td class="text-center">3</td>
                            <td class="text-right">$80.00</td>
                            <td class="text-right">$240.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>
                                <p class="font-weight-semibold mb-1">App Design</p>
                                <div class="text-muted">Promotional mobile application</div>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-right">$40.00</td>
                            <td class="text-right">$40.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-weight-semibold text-right">Subtotal</td>
                            <td class="text-right">$400.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-weight-semibold text-right">Vat Rate</td>
                            <td class="text-right">20%</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-weight-semibold text-right">Vat Due</td>
                            <td class="text-right">$50.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-weight-bold text-uppercase text-right h4 mb-0">Total Due</td>
                            <td class="font-weight-bold text-right h4 mb-0">$450.00</td>
                        </tr>
                        <tr>
						<tr>
							<td colspan="5" class="text-right">
								<button type="button" class="btn btn-primary"><i class="si si-wallet"></i> Pay Invoice</button>
								<button type="button" class="btn btn-secondary" id="download-pdf"><i class="si si-printer"></i> Download Invoice</button>
								<button type="button" class="btn btn-info" id="send-invoice"><i class="si si-paper-plane"></i> Send Invoice</button>
							</td>
						</tr>
                        </tr>
                    </table>
                </div>
                <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
            </div>
        </div>
    </div>
</div>
<!-- End row-->

<?= $this->include('layout/footer'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function generatePDF(action) {
        const element = document.querySelector('.card-body');
        
        const options = {
            margin: 1,
            filename: 'Invoice.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { y: 450 },
            jsPDF: { unit: 'mm', format: 'letter', orientation: 'portrait' }
        };

        if (action === 'download') {
            html2pdf().set(options).from(element).save(); // Convert & Download PDF
        } else if (action === 'print') {
            html2pdf().set(options).from(element).toPdf().get('pdf').then(function (pdf) {
                window.open(pdf.output('bloburl'), '_blank'); // Open PDF in new tab for printing
            });
        }
    }

    document.getElementById('download-pdf').addEventListener('click', function () {
        generatePDF('download');
    });

    document.getElementById('send-invoice').addEventListener('click', function () {
        generatePDF('print');
    });
</script>

</body>
</html>
