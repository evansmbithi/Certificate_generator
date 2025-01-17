$(document).ready(function () {
    load();
    createControl(1);
});

var count;  //gets the no. of rows indicated by user

function load (){
    
    //var submit = "<input type='submit' value='Generate Certificates' class='btn btn-outline-danger'>";
    //$("#AddControl").append(submit);

    $("#txtNoOfRec").focus();

    $("#btnCreate").click(function () {
        $("#AddControl").empty();   //restricts the number of rows to the indicated value
        var NoOfRec = $("#txtNoOfRec").val();
        //$("#AddControl").append(submit); 

        if (NoOfRec > 0){
            createControl(NoOfRec);
        }
        
    });

    $("#btnAdd").click(function () {
        //$("#AddControl").empty();   //restricts the number of rows to the indicated value
        
            newRow(count);
            alert("Only one addition is allowed!\nEnter number of rows for multiple inputs");
         
    });

    $("#btnClear").click(function () {
        $("#AddControl").empty();
        //$("#AddControl").append(submit);
        createControl(1); 
    });
    
}
function createControl(NoOfRec) {
    var tbl = "";

    tbl = "<table class='table table-bordered table-hover'>"+ 
            "<tr>"+
                "<th>No.</th>"+
                "<th>Certficate No.</th>"+
                "<th>Device</th>"+
                "<th>Registration</th>"+                
                "<th>Model</th>"+
                "<th>Name</th>"+
                "<th>Colour</th>"+
                "<th>Telephone</th>"+
                "<th>Loan Duration Years</th>"+
                "<th>Loan Duration Months</th>"+
                "<th>From</th>"+
                "<th>To</th>"+
            "</tr>";

    for (i=1; i<=NoOfRec; i++){
        count = i;
        tbl += "<tr>"+ 
                    "<td>" + i + "</td>" +
                    
                    "<td>"+
                        "<input type='text' id='certNo' name='certNo[]' placeholder='eg. 47111/05/2021' autofocus>"+
                    "</td>"+

                    "<td>"+
                        "<select id='device' name='device[]'>"+
                            "<option value='GPS/GSM/GPRS Tracking System'>GPS/GSM/GPRS Tracking System</option>"+
                            "<option value='Anti-Theft Alarm Device'>Anti-Theft Alarm Device</option>"+
                            
                        "</select>"+
                    "</td>"+

                    "<td>"+
                    /*
                        "<input type='radio' name='Gender' value='M'>Male <br/>"+
                        "<input type='radio' name='Gender' value='F'>Female"+
                    */
                        "<input type='text' id='txtReg' name='reg[]' placeholder='KCY 345N'>"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='txtModel' name='model[]' placeholder='ISUZU NPR'>"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='txtName' name='cname[]' placeholder='eg. EVANS MBITHI'>"+
                    "</td>"+            

                    "<td>"+
                        "<input type='text' id='txtColor' name='color[]' placeholder='BLACK'>"+
                    "</td>"+

                    "<td>"+
                    /*
                        "<select id='ddlCity'>"+
                            "<option value='0'> - Select City - </option>"+
                            "<option value='1'>Nairobi</option>"+
                            "<option value='2'>Kisumu</option>"+
                            "<option value='3'>Eldoret</option>"+
                            "<option value='4'>Nakuru</option>"+
                        "</select>"+
                    */
                        "<input type='text' id='txtTel' name='tel[]' placeholder='07XX XXX XXX'>"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='years' name='years[]' placeholder='4'>"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='months' name='months[]' placeholder='06'>"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='periodFrom' name='periodFrom[]' placeholder='01/01/2021'>"+
                    "</td>"+

                    "<td>"+
                        "<input type='text' id='periodTo' name='periodTo[]' placeholder='01/01/2025'>"+
                    "</td>"+
             "</tr>";
    }
    tbl += "</table>";
    $("#AddControl").append(tbl); //displays the table
}

function newRow(count) {
    var newcount = count+1;
    var tbl = "";

    tbl = "<table class='table table-bordered table-hover'>"+
            "<tr>"+
                "<th>No.</th>"+
                "<th>Name</th>"+
                "<th>Model</th>"+
                "<th>Registration</th>"+
                "<th>Colour</th>"+
                "<th>Telephone</th>"+
            "</tr>";

    for (i=newcount; i<=newcount; i++){
        
        tbl += "<tr>"+ 
                "<td>" + i + "</td>" +  

                "<td>"+
                    "<input type='text' id='txtName' name='cname[]' placeholder='eg. EVANS MBITHI' autofocus>"+
                "</td>"+

                "<td>"+
                    "<input type='text' id='txtModel' name='model[]' placeholder='ISUZU NPR'>"+
                "</td>"+

                "<td>"+
                /*
                    "<input type='radio' name='Gender' value='M'>Male <br/>"+
                    "<input type='radio' name='Gender' value='F'>Female"+
                */
                    "<input type='text' id='txtReg' name='reg[]' placeholder='KCY 345N'>"+
                "</td>"+

                "<td>"+
                    "<input type='text' id='txtColor' name='color[]' placeholder='BLACK'>"+
                "</td>"+

                "<td>"+
                /*
                    "<select id='ddlCity'>"+
                        "<option value='0'> - Select City - </option>"+
                        "<option value='1'>Nairobi</option>"+
                        "<option value='2'>Kisumu</option>"+
                        "<option value='3'>Eldoret</option>"+
                        "<option value='4'>Nakuru</option>"+
                    "</select>"+
                */
                    "<input type='text' id='txtTel' name='tel[]' placeholder='07XX XXX XXX'>"+
                "</td>"+
             "</tr>";
    }
    tbl += "</table>";

    $("#AddControl").append(tbl); //displays the table
}