<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<!-- saved from url=(0065)file:///Users/danilo/Downloads/Roster%20-%20CrewConnex%20(2).html -->
<html style="background-image: url(&quot;images/BackgroundPDC.jpg&quot;);">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Roster - CrewConnex</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/jquery.min.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/bootstrap.min.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/FloatThead.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/dateFns.min.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/moment.min.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/daterangepicker.min.js"></script>
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/bootstrap.min.css">
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/daterangepicker.css">
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/Spinner.js"></script>
    <style type="text/css"></style>
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/crewconnex.css">
    <script type="text/javascript">
        (function() {
            showSpin();
        })();
    </script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/Roster.js"></script>
    <script type="text/javascript">
        function getRosterColumns() { //function used from Roster.js
            var rosterLgColumns = document.getElementById('ctl00_Main_rosterLgColumns').value;
            var rosterMdColumns = document.getElementById('ctl00_Main_rosterMdColumns').value;
            var rosterSmColumns = document.getElementById('ctl00_Main_rosterSmColumns').value;
            var rosterXsColumns = document.getElementById('ctl00_Main_rosterXsColumns').value;
            var rosterHiddenColumns = document.getElementById('ctl00_Main_rosterHiddenColumns').value;
            return {
                rosterLgColumns: rosterLgColumns,
                rosterMdColumns: rosterMdColumns,
                rosterSmColumns: rosterSmColumns,
                rosterXsColumns: rosterXsColumns,
                rosterHiddenColumns: rosterHiddenColumns
            };
        }
    </script>
    <script type="text/javascript">
        function openPdf() {
            var periodStr = document.getElementById('ctl00_Main_dateRangeHidden').value;
            var fromStr = periodStr.substring(0, 7);
            var toStr = periodStr.substring(10, 17);
            var historicStr = ($('#ctl00_Main_historicPeriod').is(':visible') && $('#ctl00_Main_historicPeriod').hasClass('active')) || ($('#ctl00_Main_activitySelectDropdown').is(':visible') && $('#ctl00_Main_activitySelectDropdown').val() === 'historic');
            window.open('OpenFile.aspx?from=' + fromStr + '&to=' + toStr + '&historic=' + historicStr + '&title=RosterHistoric');
        }
    </script>
    <script type="text/javascript">
        $(function() {
            showSpin();
            var periodStr = document.getElementById('ctl00_Main_dateRangeHidden').value;
            var fromStr = periodStr.substring(0, 7);
            var toStr = periodStr.substring(10, 17);
            $('input[name="dateRangePicker"]').daterangepicker({
                opens: 'center',
                showDropdowns: true,
                startDate: fromStr,
                endDate: toStr,
                locale: {
                    firstDay: 1,
                    format: 'DDMMMYY'
                },
                autoApply: true,
                linkedCalendars: false
            }, function(start, end, label) {
                $('#keepSpinning').val("Undone");
                showSpin();
                document.getElementById('ctl00_Main_dateRangeHidden').value = start.format('DDMMMYY') + ' - ' + end.format('DDMMMYY');
                __doPostBack('ctl00$Main$dataRangeButton', '');
            });
            if (document.getElementById("dateRangePicker")) document.getElementById("dateRangePicker").value = document.getElementById('ctl00_Main_dateRangeHidden').value;
        });
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, minimum-scale=1, user-scalable=yes">
    <meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
    <meta name="CODE_LANGUAGE" content="C#">
    <meta name="vs_defaultClientScript" content="JavaScript">
    <meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
    <link rel="icon" href="https://air-traffic-control.rosterbuster.aero/rosterbuster/rosters/27387958/CW_Client.ico" sizes="48x48" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://air-traffic-control.rosterbuster.aero/rosterbuster/rosters/27387958/CW_Client.ico">
    <link rel="apple-touch-icon-precomposed" href="https://air-traffic-control.rosterbuster.aero/rosterbuster/rosters/27387958/CW_Client.ico">
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/Global.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/Validators.js"></script>
    <script type="text/javascript" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/PilotsLog.js"></script>
    <link rel="stylesheet" media="print" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/crewconnex_print.css">
    <link rel="stylesheet" media="screen" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/crewconnex_screen.css">
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/crewconnex_custombootstrap.css">
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/crewconnex_hideNavbar.css" disabled="">
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/crewconnex_mobile.css">
    <link rel="stylesheet" href="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/daterangepicker.css">
    <title>

    </title>
</head>

<body>




    <div class="container">
        <h2>Filter Roster by Date</h2>
        <form id="filter-form">
            <div>
                <label>Start Date:</label>
                <input type="date" name="start_date" required>
            </div>
            <div>
                <label>End Date:</label>
                <input type="date" name="end_date" required>
            </div>
            <button type="submit">Get Data</button>
        </form>

        <div id="results"></div>
    </div>

    <script>
        document.getElementById('filter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = e.target;
            const startDate = form.start_date.value;
            const endDate = form.end_date.value;

            fetch(`/roster?start_date=${startDate}&end_date=${endDate}`)
                .then(response => response.json())
                .then(data => {
                    const results = document.getElementById('results');
                    results.innerHTML = '<h4>Roster Data</h4><pre>' + JSON.stringify(data, null, 2) + '</pre>';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>



    <form name="aspnetForm" method="post" action="https://air-traffic-control.rosterbuster.aero/rosterbuster/rosters/27387958/roster.aspx" id="aspnetForm">
        <div>
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
            <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTEyMTU2NzA1OA8WCB4Ld2Vla0NoZWNrZWRoHg1wZXJpb2RDaGVja2VkZx4TY3VzdG9tUGVyaW9kQ2hlY2tlZGgeFWhpc3RvcmljUGVyaW9kQ2hlY2tlZGgWAmYPZBYCAgMPZBYEAgQPZBYCAgEPZBYQAgEPFgIeB1Zpc2libGVoZAIDDxYCHwRoZAIEDxYCHwRoZAIFDxYCHwRoZAIIDxYCHwRoZAIKDxYCHwRoZAILDxYCHwRoZAIMDxYCHwRoZAIFD2QWBAIGD2QWDgIBD2QWAgIDDw8WAh4HRW5hYmxlZGhkZAICDw8WBh4IQ3NzQ2xhc3MFHWJ0biBidG4tZGVmYXVsdCBidG4tc20gYWN0aXZlHgRUZXh0BXUNCiAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGFyaWEtaGlkZGVuPSJ0cnVlIiBjbGFzcz0iZ2x5cGhpY29uIGdseXBoaWNvbi1saXN0LWFsdCI+PC9zcGFuPg0KICAgICAgICAgICAgICAgICAgICAeBF8hU0ICAmRkAgMPDxYGHwYFFmJ0biBidG4tZGVmYXVsdCBidG4tc20fBwV1DQogICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBhcmlhLWhpZGRlbj0idHJ1ZSIgY2xhc3M9ImdseXBoaWNvbiBnbHlwaGljb24tY2FsZW5kYXIiPjwvc3Bhbj4NCiAgICAgICAgICAgICAgICAgICAgHwgCAmRkAgQPEGQPFgxmAgECAgIDAgQCBQIGAgcCCAIJAgoCCxYMEAUbV0VFSyAyLzMgKDEwSmFuMjIuLjIzSmFuMjIpBRUyMDIyLTAxLTEwfDIwMjItMDEtMjNnEAUcV0VFSyA1Mi8xICgyN0RlYzIxLi4wOUphbjIyKQUVMjAyMS0xMi0yN3wyMDIyLTAxLTA5ZxAFHVdFRUsgNTAvNTEgKDEzRGVjMjEuLjI2RGVjMjEpBRUyMDIxLTEyLTEzfDIwMjEtMTItMjZnEAUdV0VFSyA0OC80OSAoMjlOb3YyMS4uMTJEZWMyMSkFFTIwMjEtMTEtMjl8MjAyMS0xMi0xMmcQBR1XRUVLIDQ2LzQ3ICgxNU5vdjIxLi4yOE5vdjIxKQUVMjAyMS0xMS0xNXwyMDIxLTExLTI4ZxAFHVdFRUsgNDQvNDUgKDAxTm92MjEuLjE0Tm92MjEpBRUyMDIxLTExLTAxfDIwMjEtMTEtMTRnEAUdV0VFSyA0Mi80MyAoMThPY3QyMS4uMzFPY3QyMSkFFTIwMjEtMTAtMTh8MjAyMS0xMC0zMWcQBR1XRUVLIDQwLzQxICgwNE9jdDIxLi4xN09jdDIxKQUVMjAyMS0xMC0wNHwyMDIxLTEwLTE3ZxAFHVdFRUsgMzgvMzkgKDIwU2VwMjEuLjAzT2N0MjEpBRUyMDIxLTA5LTIwfDIwMjEtMTAtMDNnEAUdV0VFSyAzNi8zNyAoMDZTZXAyMS4uMTlTZXAyMSkFFTIwMjEtMDktMDZ8MjAyMS0wOS0xOWcQBR1XRUVLIDM0LzM1ICgyM0F1ZzIxLi4wNVNlcDIxKQUVMjAyMS0wOC0yM3wyMDIxLTA5LTA1ZxAFHVdFRUsgMzIvMzMgKDA5QXVnMjEuLjIyQXVnMjEpBRUyMDIxLTA4LTA5fDIwMjEtMDgtMjJnFgFmZAIFDxBkEBUYFDMgKDE3SmFuMjIuLjIzSmFuMjIpFDIgKDEwSmFuMjIuLjE2SmFuMjIpFDEgKDAzSmFuMjIuLjA5SmFuMjIpFTUyICgyN0RlYzIxLi4wMkphbjIyKRU1MSAoMjBEZWMyMS4uMjZEZWMyMSkVNTAgKDEzRGVjMjEuLjE5RGVjMjEpFTQ5ICgwNkRlYzIxLi4xMkRlYzIxKRU0OCAoMjlOb3YyMS4uMDVEZWMyMSkVNDcgKDIyTm92MjEuLjI4Tm92MjEpFTQ2ICgxNU5vdjIxLi4yMU5vdjIxKRU0NSAoMDhOb3YyMS4uMTROb3YyMSkVNDQgKDAxTm92MjEuLjA3Tm92MjEpFTQzICgyNU9jdDIxLi4zMU9jdDIxKRU0MiAoMThPY3QyMS4uMjRPY3QyMSkVNDEgKDExT2N0MjEuLjE3T2N0MjEpFTQwICgwNE9jdDIxLi4xME9jdDIxKRUzOSAoMjdTZXAyMS4uMDNPY3QyMSkVMzggKDIwU2VwMjEuLjI2U2VwMjEpFTM3ICgxM1NlcDIxLi4xOVNlcDIxKRUzNiAoMDZTZXAyMS4uMTJTZXAyMSkVMzUgKDMwQXVnMjEuLjA1U2VwMjEpFTM0ICgyM0F1ZzIxLi4yOUF1ZzIxKRUzMyAoMTZBdWcyMS4uMjJBdWcyMSkVMzIgKDA5QXVnMjEuLjE1QXVnMjEpFRgVMjAyMi0wMS0xN3wyMDIyLTAxLTIzFTIwMjItMDEtMTB8MjAyMi0wMS0xNhUyMDIyLTAxLTAzfDIwMjItMDEtMDkVMjAyMS0xMi0yN3wyMDIyLTAxLTAyFTIwMjEtMTItMjB8MjAyMS0xMi0yNhUyMDIxLTEyLTEzfDIwMjEtMTItMTkVMjAyMS0xMi0wNnwyMDIxLTEyLTEyFTIwMjEtMTEtMjl8MjAyMS0xMi0wNRUyMDIxLTExLTIyfDIwMjEtMTEtMjgVMjAyMS0xMS0xNXwyMDIxLTExLTIxFTIwMjEtMTEtMDh8MjAyMS0xMS0xNBUyMDIxLTExLTAxfDIwMjEtMTEtMDcVMjAyMS0xMC0yNXwyMDIxLTEwLTMxFTIwMjEtMTAtMTh8MjAyMS0xMC0yNBUyMDIxLTEwLTExfDIwMjEtMTAtMTcVMjAyMS0xMC0wNHwyMDIxLTEwLTEwFTIwMjEtMDktMjd8MjAyMS0xMC0wMxUyMDIxLTA5LTIwfDIwMjEtMDktMjYVMjAyMS0wOS0xM3wyMDIxLTA5LTE5FTIwMjEtMDktMDZ8MjAyMS0wOS0xMhUyMDIxLTA4LTMwfDIwMjEtMDktMDUVMjAyMS0wOC0yM3wyMDIxLTA4LTI5FTIwMjEtMDgtMTZ8MjAyMS0wOC0yMhUyMDIxLTA4LTA5fDIwMjEtMDgtMTUUKwMYZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnFgFmZAIGDxYCHwRoZAILDxBkZBYBAgFkAhEPZBYCAgEPZBYCAgEPPCsADQIADxYEHgtfIURhdGFCb3VuZGceC18hSXRlbUNvdW50Ag9kDBQrAAQWCB4ETmFtZQULRGVzY3JpcHRpb24eCklzUmVhZE9ubHloHgRUeXBlGSsCHglEYXRhRmllbGQFC0Rlc2NyaXB0aW9uFggfCwUGTW9udGgwHwxoHw0ZKwIfDgUGTW9udGgwFggfCwUGTW9udGgxHwxoHw0ZKwIfDgUGTW9udGgxFggfCwUGTW9udGgyHwxoHw0ZKwIfDgUGTW9udGgyFgJmD2QWImYPDxYCHwRoZGQCAQ9kFghmDw8WAh8HBQRXZWVrZGQCAQ8PFgIfBwUGJm5ic3A7ZGQCAg8PFgIfBwUBMmRkAgMPDxYCHwcFATNkZAICD2QWCGYPDxYCHwcFBVdvcmslZGQCAQ8PFgIfBwUGJm5ic3A7ZGQCAg8PFgIfBwUDMTAwZGQCAw8PFgIfBwUDMTAwZGQCAw9kFghmDw8WAh8HBQtEYXlzIG9mZiB5LmRkAgEPDxYCHwcFBiZuYnNwO2RkAgIPDxYCHwcFBjEyNy43NWRkAgMPDxYCHwcFBjEyNy43NWRkAgQPZBYIZg8PFgIfBwUKRGF5cyBvZmYvd2RkAgEPDxYCHwcFBiZuYnNwO2RkAgIPDxYCHwcFBDIuNDVkZAIDDw8WAh8HBQQyLjQ1ZGQCBQ9kFghmDw8WAh8HBQhEYXlzIG9mZmRkAgEPDxYCHwcFBiZuYnNwO2RkAgIPDxYCHwcFBDMuMDBkZAIDDw8WAh8HBQQyLjAwZGQCBg9kFghmDw8WAh8HBQlWYWMuIGRheXNkZAIBDw8WAh8HBQYmbmJzcDtkZAICDw8WAh8HBQEwZGQCAw8PFgIfBwUBMGRkAgcPZBYIZg8PFgIfBwUKTGVhdmUgZXRjLmRkAgEPDxYCHwcFBiZuYnNwO2RkAgIPDxYCHwcFATBkZAIDDw8WAh8HBQEwZGQCCA9kFghmDw8WAh8HBQdCYWxhbmNlZGQCAQ8PFgIfBwUGJm5ic3A7ZGQCAg8PFgIfBwUEMC41NWRkAgMPDxYCHwcFBS0wLjQ1ZGQCCQ9kFghmDw8WAh8HBQRQYWlkZGQCAQ8PFgIfBwUGJm5ic3A7ZGQCAg8PFgIfBwUEMC4wMGRkAgMPDxYCHwcFBDAuMDBkZAIKD2QWCGYPDxYCHwcFCERvbmF0aW9uZGQCAQ8PFgIfBwUGJm5ic3A7ZGQCAg8PFgIfBwUEMC4wMGRkAgMPDxYCHwcFBDAuMDBkZAILD2QWCGYPDxYCHwcFCkJhY2sgVHhmci5kZAIBDw8WAh8HBQYmbmJzcDtkZAICDw8WAh8HBQUtMC4wMGRkAgMPDxYCHwcFBS0wLjAwZGQCDA9kFghmDw8WAh8HBQhBZGouICsxNmRkAgEPDxYCHwcFBiZuYnNwO2RkAgIPDxYCHwcFBDAuMDBkZAIDDw8WAh8HBQQwLjAwZGQCDQ9kFghmDw8WAh8HBQhWQUMgQWRqLmRkAgEPDxYCHwcFBiZuYnNwO2RkAgIPDxYCHwcFBDAuMDBkZAIDDw8WAh8HBQQwLjAwZGQCDg9kFghmDw8WAh8HBQpMZWF2ZSBhZGouZGQCAQ8PFgIfBwUGJm5ic3A7ZGQCAg8PFgIfBwUEMC4wMGRkAgMPDxYCHwcFBDAuMDBkZAIPD2QWCGYPDxYCHwcFC09GRiBhY2NvdW50ZGQCAQ8PFgIfBwUFLTQuNjVkZAICDw8WAh8HBQUtNC4xMGRkAgMPDxYCHwcFBS00LjU1ZGQCEA8PFgIfBGhkZBgBBRdjdGwwMCRNYWluJGRheXNvZmZfZ3JpZA88KwAKAQgCAWSH0SNGw+n9Su6IrqIPmsqfxybpUg==">
        </div>
        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['aspnetForm'];
            if (!theForm) {
                theForm = document.aspnetForm;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>
        <div>
            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="88EEE6B3">
        </div>
        <input name="ctl00$backgroundImageUrlHiddenField" type="hidden" id="ctl00_backgroundImageUrlHiddenField" class="backgroundImageUrlValue" clientidmode="Static" value="images/BackgroundPDC.jpg">
        <input name="ctl00$logoImageUrlHiddenField" type="hidden" id="ctl00_logoImageUrlHiddenField" class="logoImageUrlValue" clientidmode="Static" value="images/Logo.png">
        <div class="container 
             ">
            <div class="row dontPrint">

                <div id="headerAppName" class="col-xs-4">
                    <div class="text-center">
                        <h2>CrewConnex</h2>
                        <div id="ctl00_headerUsernameContainer">

                        </div>
                    </div>
                </div>
                <div id="headerLogo" class="col-xs-4">
                    <div class="pull-right">
                    </div>
                </div>
            </div>
            <div id="ctl00_headerMenu" class="row dontPrint">
                <nav class="navbar navbar-default shadow">

                </nav>
            </div>
            <input id="keepSpinning" type="hidden" clientidmode="Static" value="Done">
            <input name="ctl00$Main$dateRangeHidden" type="hidden" id="ctl00_Main_dateRangeHidden" clientidmode="Static" value="13Dec21 - 26Dec21">
            <input name="ctl00$Main$rosterLgColumns" type="hidden" id="ctl00_Main_rosterLgColumns" clientidmode="Static">
            <input name="ctl00$Main$rosterMdColumns" type="hidden" id="ctl00_Main_rosterMdColumns" clientidmode="Static">
            <input name="ctl00$Main$rosterSmColumns" type="hidden" id="ctl00_Main_rosterSmColumns" clientidmode="Static" value="dc">
            <input name="ctl00$Main$rosterXsColumns" type="hidden" id="ctl00_Main_rosterXsColumns" clientidmode="Static" value="date,checkinlt,checkinutc,checkoutlt,checkoututc,activity,activityRemark,fromstn,stdlt,stdutc,tostn,stalt,stautc,AC/Hotel,blockhours,duration,counter1,Tailnumber,CrewMeal,crewcodelist,positionlist,OtherDHCrewCode,remarks,ActualFdpTime,MaxFdpTime">
            <input name="ctl00$Main$rosterHiddenColumns" type="hidden" id="ctl00_Main_rosterHiddenColumns" clientidmode="Static" value="revision,flighttime,nighttime,Paxbooked,Resources,fullnamelist,BusinessPhoneList,DHFullNameList,DHSeatingList,RestCompletedTime">
            <input id="scrollHeight" type="hidden" clientidmode="Static" value="500">
            <div class="dontPrint">
                <div class="row bottom-buffer">
                    <div class="col-xs-12">
                        <div class="text-right">
                            <a id="pdf-button" class="btn btn-default btn-sm spinner-disable" title="Save as PDF" onclick="openPdf()"><span aria-hidden="true" class="glyphicon glyphicon-file"></span> PDF</a><a id="print-button" class="btn btn-default btn-sm spinner-disable" title="Print page" onclick="javascript:window.print()"><span aria-hidden="true" class="glyphicon glyphicon-print"></span> Print</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <div id="ctl00_Main_prev_next_button" class="btn-group">
                            <a id="ctl00_Main_prev" class="btn btn-default btn-sm" title="Previous" href="javascript:__doPostBack(&#39;ctl00%24Main%24prev&#39;,&#39;&#39;)">
                                <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a id="ctl00_Main_next" disabled="" class="btn btn-default btn-sm" title="Next">
                                <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <div id="roster_grid_button" class="btn-group">
                            <a id="ctl00_Main_tableButton" class="btn btn-default btn-sm active" title="Table view" href="javascript:__doPostBack(&#39;ctl00%24Main%24tableButton&#39;,&#39;&#39;)">
                                <span aria-hidden="true" class="glyphicon glyphicon-list-alt"></span>
                            </a>
                            <a id="ctl00_Main_gridButton" class="btn btn-default btn-sm" title="Grid view" href="javascript:__doPostBack(&#39;ctl00%24Main%24gridButton&#39;,&#39;&#39;)">
                                <span aria-hidden="true" class="glyphicon glyphicon-calendar"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="dropdown" style="max-width:100%;">
                            <select name="ctl00$Main$periodSelect" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$Main$periodSelect\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_Main_periodSelect" class="center form-control input-sm dropdown-auto-size">
                                <option selected="" value="2022-01-10|2022-01-23">WEEK 2/3 (10Jan22..23Jan22)</option>
                                <option value="2021-12-27|2022-01-09">WEEK 52/1 (27Dec21..09Jan22)</option>
                                <option value="2021-12-13|2021-12-26">WEEK 50/51 (13Dec21..26Dec21)</option>
                                <option value="2021-11-29|2021-12-12">WEEK 48/49 (29Nov21..12Dec21)</option>
                                <option value="2021-11-15|2021-11-28">WEEK 46/47 (15Nov21..28Nov21)</option>
                                <option value="2021-11-01|2021-11-14">WEEK 44/45 (01Nov21..14Nov21)</option>
                                <option value="2021-10-18|2021-10-31">WEEK 42/43 (18Oct21..31Oct21)</option>
                                <option value="2021-10-04|2021-10-17">WEEK 40/41 (04Oct21..17Oct21)</option>
                                <option value="2021-09-20|2021-10-03">WEEK 38/39 (20Sep21..03Oct21)</option>
                                <option value="2021-09-06|2021-09-19">WEEK 36/37 (06Sep21..19Sep21)</option>
                                <option value="2021-08-23|2021-09-05">WEEK 34/35 (23Aug21..05Sep21)</option>
                                <option value="2021-08-09|2021-08-22">WEEK 32/33 (09Aug21..22Aug21)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="btn-group visible-md visible-lg pull-right">
                            <input type="submit" name="ctl00$Main$week" value="Week" id="ctl00_Main_week" class="btn btn-default btn-sm">
                            <input type="submit" name="ctl00$Main$period" value="Period" id="ctl00_Main_period" class="btn btn-default btn-sm active">
                            <input type="submit" name="ctl00$Main$customPeriod" value="Custom Period" id="ctl00_Main_customPeriod" class="btn btn-default btn-sm">
                            <input type="submit" name="ctl00$Main$historicPeriod" value="Historic Period" id="ctl00_Main_historicPeriod" class="btn btn-default btn-sm">
                        </div>
                        <div class="dropdown" style="">
                            <select name="ctl00$Main$activitySelectDropdown" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$Main$activitySelectDropdown\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_Main_activitySelectDropdown" class="dropdown dropdown-toggle dropdown-auto-size form-control input-sm visible-xs visible-sm pull-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <option value="week">Week</option>
                                <option selected="" value="period">Period</option>
                                <option value="custom">Custom</option>
                                <option value="historic">Historic</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row printOnly">
                <b>Period: 10Jan22 to 23Jan22 (ILV - Jan de Bosman)</b>
            </div>
            <br>
            <div id="ctl00_Main_activity_table" class="row activity_table_class dontPrint">
                <div class="col-xs-12">
                    <div class="overflow-indicator"></div>
                    <div class="overflow-hide activityGrid-overflow">
                        <div class="horizontal-scrollbar-hide scrollHeightDiv">
                            <table class="activityTableStyle monospace-font activityGrid_class" cellspacing="0" border="0" id="ctl00_Main_activityGrid" style="border-collapse:collapse;">
                                <tbody>
                                    <tr id="ctl00_Main_activityGrid_-1" class="activity-table-header" style="font-weight:bold;">
                                        <td class="lineLeft dontPrint collapse-icon" style="width:25px;">
                                            <span id="collapseAllHeader" class="glyphicon glyphicon-minus-sign align-glyphicon" aria-hidden="true"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">Date</td>
                                        <td class="activitytablerow-revision visible-none-custom">Rev</td>
                                        <td class="activitytablerow-dc visible-sm-custom">DC</td>
                                        <td class="activitytablerow-checkinlt">C/I(L)</td>
                                        <td class="activitytablerow-checkinutc">C/I(Z)</td>
                                        <td class="activitytablerow-checkoutlt">C/O(L)</td>
                                        <td class="activitytablerow-checkoututc">C/O(Z)</td>
                                        <td class="activitytablerow-activity">Activity</td>
                                        <td class="activitytablerow-activityRemark">Remark</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">From</td>
                                        <td class="activitytablerow-stdlt">STD(L)</td>
                                        <td class="activitytablerow-stdutc">STD(Z)</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">To</td>
                                        <td class="activitytablerow-stalt">STA(L)</td>
                                        <td class="activitytablerow-stautc">STA(Z)</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">AC/Hotel</td>
                                        <td class="activitytablerow-blockhours">BLH</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">
                                            <nobr>Flight Time</nobr>
                                        </td>
                                        <td class="activitytablerow-nighttime visible-none-custom">
                                            <nobr>Night Time</nobr>
                                        </td>
                                        <td class="activitytablerow-duration">Dur</td>
                                        <td class="activitytablerow-counter1">
                                            <nobr>Ext</nobr>
                                        </td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">
                                            <nobr>Pax booked</nobr>
                                        </td>
                                        <td class="activitytablerow-Tailnumber">ACReg</td>
                                        <td class="activitytablerow-CrewMeal">CrewMeal</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">Resources</td>
                                        <td class="activitytablerow-crewcodelist">CC</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">Name</td>
                                        <td class="activitytablerow-positionlist">Pos.</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">
                                            <nobr>Work Phone</nobr>
                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>DH Crew</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">
                                            <nobr>DH Name</nobr>
                                        </td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">
                                            <nobr>DH Seat</nobr>
                                        </td>
                                        <td class="activitytablerow-remarks">Remarks</td>
                                        <td class="activitytablerow-ActualFdpTime">
                                            <nobr>Fdp Time</nobr>
                                        </td>
                                        <td class="activitytablerow-MaxFdpTime">
                                            <nobr>Max Fdp</nobr>
                                        </td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">
                                            <nobr>Rest Compl.</nobr>
                                        </td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_0" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Mon 10</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0845</td>
                                        <td class="activitytablerow-checkinutc">0745</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX77</td>
                                        <td class="activitytablerow-activityRemark">DX 0077</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0945</td>
                                        <td class="activitytablerow-stdutc">0845</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1035</td>
                                        <td class="activitytablerow-stautc">0935</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>JBN</nobr><br>
                                            <nobr>THI</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">
                                            <nobr>CP (PIC)</nobr><br>
                                            <nobr>FO</nobr><br>
                                            <nobr>CA</nobr>
                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">

                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">
                                            <br><br>
                                        </td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_1">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX80</td>
                                        <td class="activitytablerow-activityRemark">DX 0080</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1445</td>
                                        <td class="activitytablerow-stdutc">1345</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1535</td>
                                        <td class="activitytablerow-stautc">1435</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_2">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX83</td>
                                        <td class="activitytablerow-activityRemark">DX 0083</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">1620</td>
                                        <td class="activitytablerow-stdutc">1520</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1710</td>
                                        <td class="activitytablerow-stautc">1610</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_3">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">1855</td>
                                        <td class="activitytablerow-checkoututc">1755</td>
                                        <td class="activitytablerow-activity">DX82</td>
                                        <td class="activitytablerow-activityRemark">DX 0082</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1745</td>
                                        <td class="activitytablerow-stdutc">1645</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1835</td>
                                        <td class="activitytablerow-stautc">1735</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">3:20</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">0:50</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">10:10</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>VIO</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">9:50</td>
                                        <td class="activitytablerow-MaxFdpTime">12:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0655+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_4">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Tue 11</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0845</td>
                                        <td class="activitytablerow-checkinutc">0745</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX77</td>
                                        <td class="activitytablerow-activityRemark">DX 0077</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0945</td>
                                        <td class="activitytablerow-stdutc">0845</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1035</td>
                                        <td class="activitytablerow-stautc">0935</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>LET</nobr><br>
                                            <nobr>THI</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">

                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_5">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX80</td>
                                        <td class="activitytablerow-activityRemark">DX 0080</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1445</td>
                                        <td class="activitytablerow-stdutc">1345</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1535</td>
                                        <td class="activitytablerow-stautc">1435</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_6">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX83</td>
                                        <td class="activitytablerow-activityRemark">DX 0083</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">1620</td>
                                        <td class="activitytablerow-stdutc">1520</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1710</td>
                                        <td class="activitytablerow-stautc">1610</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_7">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">1855</td>
                                        <td class="activitytablerow-checkoututc">1755</td>
                                        <td class="activitytablerow-activity">DX82</td>
                                        <td class="activitytablerow-activityRemark">DX 0082</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1745</td>
                                        <td class="activitytablerow-stdutc">1645</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1835</td>
                                        <td class="activitytablerow-stautc">1735</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">3:20</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">0:50</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">10:10</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">9:50</td>
                                        <td class="activitytablerow-MaxFdpTime">12:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0655+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_8" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Wed 12</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">OFF</td>
                                        <td class="activitytablerow-activityRemark">OFF</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0000</td>
                                        <td class="activitytablerow-stdutc">2300-1</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">2400</td>
                                        <td class="activitytablerow-stautc">2300</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom"></td>
                                        <td class="activitytablerow-positionlist">-</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_9">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Thu 13</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">OFF</td>
                                        <td class="activitytablerow-activityRemark">OFF</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0000</td>
                                        <td class="activitytablerow-stdutc">2300-1</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">2400</td>
                                        <td class="activitytablerow-stautc">2300</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_10">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Fri 14</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">OFF</td>
                                        <td class="activitytablerow-activityRemark">OFF</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0000</td>
                                        <td class="activitytablerow-stdutc">2300-1</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">2400</td>
                                        <td class="activitytablerow-stautc">2300</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_11">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Sat 15</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0600</td>
                                        <td class="activitytablerow-checkinutc">0500</td>
                                        <td class="activitytablerow-checkoutlt">1800</td>
                                        <td class="activitytablerow-checkoututc">1700</td>
                                        <td class="activitytablerow-activity">SBY</td>
                                        <td class="activitytablerow-activityRemark">SBY</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0600</td>
                                        <td class="activitytablerow-stdutc">0500</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1800</td>
                                        <td class="activitytablerow-stautc">1700</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">0:00</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">3:00</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">4:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0600+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_12">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Sun 16</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0600</td>
                                        <td class="activitytablerow-checkinutc">0500</td>
                                        <td class="activitytablerow-checkoutlt">1800</td>
                                        <td class="activitytablerow-checkoututc">1700</td>
                                        <td class="activitytablerow-activity">SBY</td>
                                        <td class="activitytablerow-activityRemark">SBY</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0600</td>
                                        <td class="activitytablerow-stdutc">0500</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1800</td>
                                        <td class="activitytablerow-stautc">1700</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">0:00</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">3:00</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">4:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0600+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_13" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Mon 17</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0845</td>
                                        <td class="activitytablerow-checkinutc">0745</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX77</td>
                                        <td class="activitytablerow-activityRemark">DX 0077</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0945</td>
                                        <td class="activitytablerow-stdutc">0845</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1035</td>
                                        <td class="activitytablerow-stautc">0935</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>HAN</nobr><br>
                                            <nobr>THI</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">
                                            <nobr>CP (PIC)</nobr><br>
                                            <nobr>FO</nobr><br>
                                            <nobr>CA</nobr>
                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_14">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX80</td>
                                        <td class="activitytablerow-activityRemark">DX 0080</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1445</td>
                                        <td class="activitytablerow-stdutc">1345</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1535</td>
                                        <td class="activitytablerow-stautc">1435</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>LAF</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_15">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX83</td>
                                        <td class="activitytablerow-activityRemark">DX 0083</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">1620</td>
                                        <td class="activitytablerow-stdutc">1520</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1710</td>
                                        <td class="activitytablerow-stautc">1610</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>TIO</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_16">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">1855</td>
                                        <td class="activitytablerow-checkoututc">1755</td>
                                        <td class="activitytablerow-activity">DX82</td>
                                        <td class="activitytablerow-activityRemark">DX 0082</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1745</td>
                                        <td class="activitytablerow-stdutc">1645</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1835</td>
                                        <td class="activitytablerow-stautc">1735</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">3:20</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">0:50</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">10:10</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">9:50</td>
                                        <td class="activitytablerow-MaxFdpTime">12:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0655+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_17" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Tue 18</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">OFF</td>
                                        <td class="activitytablerow-activityRemark">OFF</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0000</td>
                                        <td class="activitytablerow-stdutc">2300-1</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">2400</td>
                                        <td class="activitytablerow-stautc">2300</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom"></td>
                                        <td class="activitytablerow-positionlist">-</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_18">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Wed 19</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">OFF</td>
                                        <td class="activitytablerow-activityRemark">OFF</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0000</td>
                                        <td class="activitytablerow-stdutc">2300-1</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">2400</td>
                                        <td class="activitytablerow-stautc">2300</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_19" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Thu 20</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0600</td>
                                        <td class="activitytablerow-checkinutc">0500</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX73</td>
                                        <td class="activitytablerow-activityRemark">DX 0073</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0700</td>
                                        <td class="activitytablerow-stdutc">0600</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">0750</td>
                                        <td class="activitytablerow-stautc">0650</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>HAN</nobr><br>
                                            <nobr>BRO</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">
                                            <nobr>CP (PIC)</nobr><br>
                                            <nobr>FO</nobr><br>
                                            <nobr>CA</nobr>
                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_20">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX74</td>
                                        <td class="activitytablerow-activityRemark">DX 0074</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">0820</td>
                                        <td class="activitytablerow-stdutc">0720</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">0910</td>
                                        <td class="activitytablerow-stautc">0810</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_21">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX77</td>
                                        <td class="activitytablerow-activityRemark">DX 0077</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0945</td>
                                        <td class="activitytablerow-stdutc">0845</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1035</td>
                                        <td class="activitytablerow-stautc">0935</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_22">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">1530</td>
                                        <td class="activitytablerow-checkoututc">1430</td>
                                        <td class="activitytablerow-activity">DX80</td>
                                        <td class="activitytablerow-activityRemark">DX 0080</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1415</td>
                                        <td class="activitytablerow-stdutc">1315</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1510</td>
                                        <td class="activitytablerow-stautc">1410</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">3:25</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">0:55</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">9:30</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>TIO</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">9:10</td>
                                        <td class="activitytablerow-MaxFdpTime">12:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0330+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_23" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Fri 21</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0600</td>
                                        <td class="activitytablerow-checkinutc">0500</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX73</td>
                                        <td class="activitytablerow-activityRemark">DX 0073</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0700</td>
                                        <td class="activitytablerow-stdutc">0600</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">0750</td>
                                        <td class="activitytablerow-stautc">0650</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>TIO</nobr><br>
                                            <nobr>THI</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">
                                            <nobr>CP (PIC)</nobr><br>
                                            <nobr>FO</nobr><br>
                                            <nobr>CA</nobr>
                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_24">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX74</td>
                                        <td class="activitytablerow-activityRemark">DX 0074</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">0820</td>
                                        <td class="activitytablerow-stdutc">0720</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">0910</td>
                                        <td class="activitytablerow-stautc">0810</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_25">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX77</td>
                                        <td class="activitytablerow-activityRemark">DX 0077</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0945</td>
                                        <td class="activitytablerow-stdutc">0845</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1035</td>
                                        <td class="activitytablerow-stautc">0935</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>NAH</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_26">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">1600</td>
                                        <td class="activitytablerow-checkoututc">1500</td>
                                        <td class="activitytablerow-activity">DX80</td>
                                        <td class="activitytablerow-activityRemark">DX 0080</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1445</td>
                                        <td class="activitytablerow-stdutc">1345</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1540</td>
                                        <td class="activitytablerow-stautc">1440</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">3:25</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">0:55</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">10:00</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>LET</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">9:40</td>
                                        <td class="activitytablerow-MaxFdpTime">12:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0400+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_27" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Sat 22</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">DH</td>
                                        <td class="activitytablerow-checkinlt">0655</td>
                                        <td class="activitytablerow-checkinutc">0555</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">CAR</td>
                                        <td class="activitytablerow-activityRemark">Comapany Car</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">0655</td>
                                        <td class="activitytablerow-stdutc">0555</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">EBJ</td>
                                        <td class="activitytablerow-stalt">0820</td>
                                        <td class="activitytablerow-stautc">0720</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">&nbsp;</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-positionlist">&nbsp;</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_28">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">0820</td>
                                        <td class="activitytablerow-checkinutc">0720</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX21</td>
                                        <td class="activitytablerow-activityRemark">DX 0021</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">EBJ</td>
                                        <td class="activitytablerow-stdlt">0920</td>
                                        <td class="activitytablerow-stdutc">0820</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">SVG</td>
                                        <td class="activitytablerow-stalt">1030</td>
                                        <td class="activitytablerow-stautc">0930</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRJ</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>HAN</nobr><br>
                                            <nobr>THI</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">
                                            <nobr>CP (PIC)</nobr><br>
                                            <nobr>FO</nobr><br>
                                            <nobr>CA</nobr>
                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_29">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX22</td>
                                        <td class="activitytablerow-activityRemark">DX 0022</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">SVG</td>
                                        <td class="activitytablerow-stdlt">1100</td>
                                        <td class="activitytablerow-stdutc">1000</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">EBJ</td>
                                        <td class="activitytablerow-stalt">1210</td>
                                        <td class="activitytablerow-stautc">1110</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRJ</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_30">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">DH</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">1410</td>
                                        <td class="activitytablerow-checkoututc">1310</td>
                                        <td class="activitytablerow-activity">CAR</td>
                                        <td class="activitytablerow-activityRemark">Company Car</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">EBJ</td>
                                        <td class="activitytablerow-stdlt">1230</td>
                                        <td class="activitytablerow-stdutc">1130</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1410</td>
                                        <td class="activitytablerow-stautc">1310</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                        </td>
                                        <td class="activitytablerow-blockhours">2:20</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">7:15</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">&nbsp;</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">&nbsp;</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-positionlist">&nbsp;</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">5:15</td>
                                        <td class="activitytablerow-MaxFdpTime">13:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0210+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_31" class="lineTop">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date">
                                            <nobr>Sun 23</nobr>
                                        </td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">1045</td>
                                        <td class="activitytablerow-checkinutc">0945</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX79</td>
                                        <td class="activitytablerow-activityRemark">DX 0079</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">1145</td>
                                        <td class="activitytablerow-stdutc">1045</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1235</td>
                                        <td class="activitytablerow-stautc">1135</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">
                                            <nobr>HAN</nobr><br>
                                            <nobr>BRO</nobr><br>
                                            <nobr>ILV</nobr>
                                        </td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-positionlist">
                                            <nobr>CP (PIC)</nobr><br>
                                            <nobr>FO</nobr><br>
                                            <nobr>CA</nobr>
                                        </td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_32">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX82</td>
                                        <td class="activitytablerow-activityRemark">DX 0082</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1700</td>
                                        <td class="activitytablerow-stdutc">1600</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">1750</td>
                                        <td class="activitytablerow-stautc">1650</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">
                                            <nobr>NAH</nobr>
                                        </td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom"></td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_33">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">&nbsp;</td>
                                        <td class="activitytablerow-checkoututc">&nbsp;</td>
                                        <td class="activitytablerow-activity">DX85</td>
                                        <td class="activitytablerow-activityRemark">DX 0085</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">KRP</td>
                                        <td class="activitytablerow-stdlt">1820</td>
                                        <td class="activitytablerow-stdutc">1720</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">CPH</td>
                                        <td class="activitytablerow-stalt">1910</td>
                                        <td class="activitytablerow-stautc">1810</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">&nbsp;</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">&nbsp;</td>
                                        <td class="activitytablerow-counter1">&nbsp;</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-MaxFdpTime">&nbsp;</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">&nbsp;</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                    <tr id="ctl00_Main_activityGrid_34">
                                        <td class="lineLeft dontPrint expand-icon">
                                            <span class="glyphicon glyphicon-plus-sign align-glyphicon"></span>
                                        </td>
                                        <td class="lineLeft activitytablerow-date"></td>
                                        <td class="activitytablerow-revision visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-dc visible-sm-custom">&nbsp;</td>
                                        <td class="activitytablerow-checkinlt">&nbsp;</td>
                                        <td class="activitytablerow-checkinutc">&nbsp;</td>
                                        <td class="activitytablerow-checkoutlt">2050</td>
                                        <td class="activitytablerow-checkoututc">1950</td>
                                        <td class="activitytablerow-activity">DX86</td>
                                        <td class="activitytablerow-activityRemark">DX 0086</td>
                                        <td class="lineLeft lineleft1">&nbsp;</td>
                                        <td class="activitytablerow-fromstn">CPH</td>
                                        <td class="activitytablerow-stdlt">1940</td>
                                        <td class="activitytablerow-stdutc">1840</td>
                                        <td class="lineLeft lineleft2">&nbsp;</td>
                                        <td class="activitytablerow-tostn">KRP</td>
                                        <td class="activitytablerow-stalt">2030</td>
                                        <td class="activitytablerow-stautc">1930</td>
                                        <td class="lineLeft lineleft3">&nbsp;</td>
                                        <td class="activitytablerow-AC/Hotel">
                                            DO4
                                        </td>
                                        <td class="activitytablerow-blockhours">3:20</td>
                                        <td class="activitytablerow-flighttime visible-none-custom">0:50</td>
                                        <td class="activitytablerow-nighttime visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-duration">10:05</td>
                                        <td class="activitytablerow-counter1">0</td>
                                        <td class="lineLeft lineleft4">&nbsp;</td>
                                        <td class="activitytablerow-Paxbooked visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-Tailnumber">OYJRY</td>
                                        <td class="activitytablerow-CrewMeal">&nbsp;</td>
                                        <td class="lineLeft lineleft5">&nbsp;</td>
                                        <td class="activitytablerow-Resources visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-crewcodelist">|</td>
                                        <td class="activitytablerow-fullnamelist visible-none-custom">|</td>
                                        <td class="activitytablerow-positionlist">|</td>
                                        <td class="activitytablerow-BusinessPhoneList visible-none-custom">

                                        </td>
                                        <td class="activitytablerow-OtherDHCrewCode">&nbsp;</td>
                                        <td class="activitytablerow-DHFullNameList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-DHSeatingList visible-none-custom">&nbsp;</td>
                                        <td class="activitytablerow-remarks">&nbsp;</td>
                                        <td class="activitytablerow-ActualFdpTime">9:45</td>
                                        <td class="activitytablerow-MaxFdpTime">12:00</td>
                                        <td class="activitytablerow-RestCompletedTime visible-none-custom">0850+1</td>
                                        <td class="lineRight lineright1">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_sum_table">
                                <div class="panel panel-default">
                                    <div class="panel-heading panel-compress">
                                        <b>Sum</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table id="ctl00_Main_sum_grid" class="noteTable monospace-font">
                                            <tbody>
                                                <tr>
                                                    <td>Total BLH: </td>
                                                    <td>22:30</td>
                                                </tr>
                                                <tr>
                                                    <td>Total <nobr>Flight Time</nobr>: </td>
                                                    <td>5:10</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Dur: </td>
                                                    <td>73:20</td>
                                                </tr>
                                                <tr>
                                                    <td>Total <nobr>Fdp Time</nobr>: </td>
                                                    <td>63:20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_Employment" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_CrewNotes" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_crew_table">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Crew Notes</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table class="noteTable monospace-font" cellspacing="0" align="Center" border="0" id="ctl00_Main_crewNote_grid" style="border-collapse:collapse;">
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_ReportNotes" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_report_table">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Report Notes</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table class="noteTable monospace-font" cellspacing="0" align="Center" border="0" id="ctl00_Main_reportNotes_grid" style="border-collapse:collapse;">
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_Notifications" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_notification_table">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Notifications</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table class="noteTable monospace-font" cellspacing="0" align="Center" border="0" id="ctl00_Main_notification_grid" style="border-collapse:collapse;">
                                            <tbody>
                                                <tr style="font-weight:bold;">
                                                    <td>Revision</td>
                                                    <td>Note</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_Accounts" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-indicator"></div>
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_account_table">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Accounts</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table class="noteTable monospace-font" cellspacing="0" align="Center" border="0" id="ctl00_Main_account_grid" style="border-collapse:collapse;">
                                            <tbody>
                                                <tr style="font-weight:bold;">
                                                    <td>Name</td>
                                                    <td>Issued</td>
                                                    <td>Received</td>
                                                    <td>Planned</td>
                                                    <td>Balance</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>VACA 2021</td>
                                                    <td>24.96</td>
                                                    <td>21.00</td>
                                                    <td>4.00</td>
                                                    <td>-0.04</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_Expiry" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-indicator"></div>
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_expiry_table">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Expiry</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table class="noteTable monospace-font" cellspacing="0" align="Center" border="0" id="ctl00_Main_expiry_grid" style="width:100%;border-collapse:collapse;">
                                            <tbody>
                                                <tr style="font-weight:bold;">
                                                    <td>Qualification</td>
                                                    <td>Expiry</td>
                                                    <td>Planned</td>
                                                    <td>Description</td>
                                                </tr>
                                                <tr>
                                                    <td>LC320 LT CC</td>
                                                    <td>30Apr22</td>
                                                    <td>-</td>
                                                    <td>LineCcheck for A320 DAT LT CC</td>
                                                </tr>
                                                <tr>
                                                    <td>FIRE</td>
                                                    <td>30Jun22</td>
                                                    <td>-</td>
                                                    <td>Fire Training</td>
                                                </tr>
                                                <tr>
                                                    <td>SEC LT</td>
                                                    <td>30Jun22</td>
                                                    <td>-</td>
                                                    <td>Security (Lithuania)</td>
                                                </tr>
                                                <tr>
                                                    <td>CRM1</td>
                                                    <td>30Jun22</td>
                                                    <td>-</td>
                                                    <td>Crew res. manageme 1</td>
                                                </tr>
                                                <tr>
                                                    <td>EASA FTL</td>
                                                    <td>30Jun22</td>
                                                    <td>-</td>
                                                    <td>EASA Flight Time Limitations</td>
                                                </tr>
                                                <tr>
                                                    <td>EASA FRM&amp;FTL</td>
                                                    <td>30Jun22</td>
                                                    <td>-</td>
                                                    <td>EASA Fatique Risk Management training and FTL</td>
                                                </tr>
                                                <tr>
                                                    <td>EBU</td>
                                                    <td>31Jul22</td>
                                                    <td>-</td>
                                                    <td>Emerg. ATR/First Aid</td>
                                                </tr>
                                                <tr>
                                                    <td>ESETA</td>
                                                    <td>31Jul22</td>
                                                    <td>-</td>
                                                    <td>Emergency ATR</td>
                                                </tr>
                                                <tr>
                                                    <td>FAID CC</td>
                                                    <td>31Jul22</td>
                                                    <td>-</td>
                                                    <td>First Aid CC practical</td>
                                                </tr>
                                                <tr>
                                                    <td>AIRATR</td>
                                                    <td>31Jul22</td>
                                                    <td>-</td>
                                                    <td>Accident/incident ATR42/72</td>
                                                </tr>
                                                <tr>
                                                    <td>IREM</td>
                                                    <td>31Jul22</td>
                                                    <td>-</td>
                                                    <td>Ice / removal of ice</td>
                                                </tr>
                                                <tr>
                                                    <td>AIR320</td>
                                                    <td>31Jul22</td>
                                                    <td>-</td>
                                                    <td>Accident and Incident Review A320</td>
                                                </tr>
                                                <tr>
                                                    <td>LCATR LT CC</td>
                                                    <td>31Dec22</td>
                                                    <td>-</td>
                                                    <td>DAT LT Line Check for ATR CC</td>
                                                </tr>
                                                <tr>
                                                    <td>DG</td>
                                                    <td>17Jun23</td>
                                                    <td>-</td>
                                                    <td>Dangerous Goods</td>
                                                </tr>
                                                <tr>
                                                    <td>CRM2</td>
                                                    <td>30Jun23</td>
                                                    <td>-</td>
                                                    <td>Crew res. manageme 2</td>
                                                </tr>
                                                <tr>
                                                    <td>EBU3203</td>
                                                    <td>31Jul23</td>
                                                    <td>-</td>
                                                    <td>EBU 320 3</td>
                                                </tr>
                                                <tr>
                                                    <td>DOOR ATR</td>
                                                    <td>31Oct23</td>
                                                    <td>-</td>
                                                    <td>ATR DOOR mockup/A/C</td>
                                                </tr>
                                                <tr>
                                                    <td>DOOR 320</td>
                                                    <td>31Oct23</td>
                                                    <td>-</td>
                                                    <td>A320 DOOR mockup / AC</td>
                                                </tr>
                                                <tr>
                                                    <td>CRM3</td>
                                                    <td>30Jun24</td>
                                                    <td>-</td>
                                                    <td>Crew res. manageme 3</td>
                                                </tr>
                                                <tr>
                                                    <td>Passport 1st</td>
                                                    <td>09Nov29</td>
                                                    <td>-</td>
                                                    <td>Autogenerated Passport 1st</td>
                                                </tr>
                                                <tr>
                                                    <td>Operate(D3X)</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>Operate(DO4)</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>Operate(DO5)</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>Operate(DOA)</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>Operate(DO7)</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>Operate(DO6)</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>License</td>
                                                    <td>31Dec49</td>
                                                    <td>-</td>
                                                    <td>Autogenerated License</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_DaysOff" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_days_off_table">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Days Off</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <div>
                                            <table class="noteTable monospace-font" cellspacing="0" border="0" id="ctl00_Main_daysoff_grid" style="border-collapse:collapse;">
                                                <tbody>
                                                    <tr>
                                                        <td>Week</td>
                                                        <td>&nbsp;</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work%</td>
                                                        <td>&nbsp;</td>
                                                        <td>100</td>
                                                        <td>100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Days off y.</td>
                                                        <td>&nbsp;</td>
                                                        <td>127.75</td>
                                                        <td>127.75</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Days off/w</td>
                                                        <td>&nbsp;</td>
                                                        <td>2.45</td>
                                                        <td>2.45</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Days off</td>
                                                        <td>&nbsp;</td>
                                                        <td>3.00</td>
                                                        <td>2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vac. days</td>
                                                        <td>&nbsp;</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Leave etc.</td>
                                                        <td>&nbsp;</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Balance</td>
                                                        <td>&nbsp;</td>
                                                        <td>0.55</td>
                                                        <td>-0.45</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paid</td>
                                                        <td>&nbsp;</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donation</td>
                                                        <td>&nbsp;</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Back Txfr.</td>
                                                        <td>&nbsp;</td>
                                                        <td>-0.00</td>
                                                        <td>-0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adj. +16</td>
                                                        <td>&nbsp;</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>VAC Adj.</td>
                                                        <td>&nbsp;</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Leave adj.</td>
                                                        <td>&nbsp;</td>
                                                        <td>0.00</td>
                                                        <td>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>OFF account</td>
                                                        <td>-4.65</td>
                                                        <td>-4.10</td>
                                                        <td>-4.55</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ctl00_Main_section_ActivityCode" class="row">
                <div class="col-xs-12 center top-buffer">
                    <div class="overflow-hide">
                        <div class="containerTable">
                            <div id="ctl00_Main_activity_legend">
                                <div class="panel panel-default panel-roster">
                                    <div class="panel-heading panel-compress">
                                        <b>Activity Code Descriptions</b>
                                    </div>
                                    <div class="panel-body panel-compress">
                                        <table class="noteTable monospace-font">
                                            <tbody>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>CAR</td>
                                                    <td>CAR</td>
                                                </tr>
                                                <tr>
                                                    <td>OFF</td>
                                                    <td>Day off</td>
                                                </tr>
                                                <tr>
                                                    <td>SBY</td>
                                                    <td>Standby</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <div class="row dontPrint">
                <div class="col-xs-4">
                </div>
                <div id="Div1" class="col-xs-4">
                    <div class="text-center">
                    </div>
                </div>
                <div id="Div2" class="col-xs-4">
                    <div class="pull-right">
                        <div class="pull-right" style="max-width: 100px; color: Gray;">
                            <nobr>Powered by</nobr>
                            <img style="max-width: 100%; height: auto;" src="file:///Users/danilo/Downloads/Roster%20-%20CrewConnex_files/LogoPDC.png" alt="Powered by">
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </form>
    <div id="overlay"></div>


</body>

</html>