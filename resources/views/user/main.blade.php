@extends('user\master')

@section('content')
<div class="main">
    <div id='alert'></div>
    <h2 class="text-center">Students</h2>
    <div class="container">
        <button type="submit" id="sub" class="btn btn-danger">Save changes</button>
        <button onclick="generate_excel('sss')" class="btn btn-success">Save as excel</button>
    </div>
    <div class="container">
        <Label for="search">Search here</Label>
        <input type="text" id="search" class=""><br>
        <Label for="ten">Minimun tenth percentage</Label>
        <input type="text" id="ten"><br>
        <Label for="twelve">Minimum Twelvth percentage</Label>
        <input type="text" id="twelve"><br>
        <Label for="diplo">Minimum diploma percentage</Label>
        <input type="text" id="diplo"><br>
        <Label for="sgpa">Minimum SGPA</Label>
        <input type="text" id="sgpa"><br>
        <Label for="perce">Minimum percentage</Label>
        <input type="text" id="perce"><br>
        <Label for="back">Active backlogs</Label>
        <select id="back">
            <option value="Yes">YES</option>
            <option value="NO">NO</option>
        </select><br>
        <Label for="gender">Gender</Label>
        <select id="gender">
            <option value="Both">Both</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <Label for="gap">Year Gap</Label>
        <input type="text" id="gap"><br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-striped col-md-12 editable" id="sss">
                <thead>
                    <tr class="thead-dark">
                        <th>URN</th>
                        <th>CRN</th>
                        <th>Name</th>
                        <th>Whatsapp Contact</th>
                        <th>DOB</th>
                        <th>Branch</th>
                        <th>Gender</th>
                        <th>E-mail</th>
                        <th>Phone number</th>
                        <th>Tenth Percentage</th>
                        <th>Twelveth Percentage</th>
                        <th>Diploma Percentage</th>
                        <th>Year Gap</th>
                        <th>SGPA</th>
                        <th>Percentage</th>
                        <th>Credits</th>
                        <th>Active Backlogs</th>
                        <th>Passive Backlogs</th>
                    </tr>
                </thead>
                <tbody id="tbo">
                </tbody>
            </table>
            <a href="javascript:prevPage()" id="btn_prev">Prev</a>
            <a href="javascript:nextPage()" id="btn_next">Next</a>
            page: <span id="page"></span>
        </div>
    </div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
    var records_per_page = 20;

    var objJson, current_page;

    function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
    }

    function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
    }

    function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("tbo");
        var page_span = document.getElementById("page");

        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        listing_table.innerHTML = "";

        for (var i = (page - 1) * records_per_page; i < (page * records_per_page); i++) {
            listing_table.innerHTML += objJson[i];
        }
        page_span.innerHTML = page;

        if (page == 1) {
            btn_prev.style.visibility = "hidden";
        } else {
            btn_prev.style.visibility = "visible";
        }

        if (page == numPages()) {
            btn_next.style.visibility = "hidden";
        } else {
            btn_next.style.visibility = "visible";
        }
    }

    function numPages() {
        return Math.ceil(objJson.length / records_per_page);
    }



    $(document).ready(function() {

        findMember();
        var timeoutID = null;

        function findMember(str = '') {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/get",
                type: 'POST',
                data: {
                    searc: str,
                    tenth: document.getElementById('ten').value,
                    twelve: document.getElementById('twelve').value,
                    diplo: document.getElementById('diplo').value,
                    sgpa: document.getElementById('sgpa').value,
                    perce: document.getElementById('perce').value,
                    back: document.getElementById('back').value,
                    gender: document.getElementById('gender').value,
                    gap: document.getElementById('gap').value
                },
                dataType: 'JSON',
                success: function(result) {
                    //$('tbody').html(result.success);
                    objJson = result;
                    console.log(result);
                    current_page = 1;
                    changePage(1);
                }
            });
        }

        $('#search').keyup(function(e) {
            clearTimeout(timeoutID);
            timeoutID = setTimeout(() => findMember(e.target.value), 500);
        });

        $('#sub').click(function() {
            let row = document.getElementsByTagName('tr');
            let data = [];
            for (let i = 1; i < row.length; i++) {
                data.push({
                    "URN": row[i].cells[0].textContent,
                    'CRN': row[i].cells[1].textContent,
                    'name': row[i].cells[2].textContent,
                    'whatsapp_cont': row[i].cells[3].textContent,
                    'dob': row[i].cells[4].textContent,
                    'branch_type': row[i].cells[5].textContent,
                    'gender': row[i].cells[6].textContent,
                    'mail_id': row[i].cells[7].textContent,
                    'phone_number': row[i].cells[8].textContent,
                    'tenth_percentage': row[i].cells[9].textContent,
                    'percentage_twelve': row[i].cells[10].textContent,
                    'percentage_Diploma': row[i].cells[11].textContent,
                    'year_gap': row[i].cells[12].textContent,
                    'sgpa_aggregate': row[i].cells[13].textContent,
                    'percentage_aggregate': row[i].cells[14].textContent,
                    'credits_aggregate': row[i].cells[15].textContent,
                    'active_backlog_aggregate': row[i].cells[16].textContent,
                    'passive_backlog_aggregate': row[i].cells[17].textContent
                });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/sub",
                type: 'POST',
                data: {
                    data: data
                },
                dataType: 'JSON',
                success: function(result) {
                    $('#alert').show();
                    $('#alert').html(result.success);
                }
            });

        });
    });

    function generate_excel(tableid) {
        var table = document.getElementById(tableid);
        var html = table.outerHTML;
        window.open('data:application/vnd.ms-excel;base64,' + base64_encode(html));
    }

    function base64_encode(data) {
        var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
            ac = 0,
            enc = "",
            tmp_arr = [];

        if (!data) {
            return data;
        }

        do {
            o1 = data.charCodeAt(i++);
            o2 = data.charCodeAt(i++);
            o3 = data.charCodeAt(i++);

            bits = o1 << 16 | o2 << 8 | o3;

            h1 = bits >> 18 & 0x3f;
            h2 = bits >> 12 & 0x3f;
            h3 = bits >> 6 & 0x3f;
            h4 = bits & 0x3f;

            tmp_arr[ac++] = b64.charAt(h1) + b64.charAt(h2) + b64.charAt(h3) + b64.charAt(h4);
        } while (i < data.length);

        enc = tmp_arr.join('');

        var r = data.length % 3;

        return (r ? enc.slice(0, r - 3) : enc) + '==='.slice(r || 3);

    }
</script>
@endsection