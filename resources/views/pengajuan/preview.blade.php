<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {font-size: 10px}
-->
</style>
<body>
   @foreach ($getsetuju as $result => $r)
   
		<table rules="all" width="530" border="1" align="center">
		  <tr>
			<td width="105"><img src="{{ ('logo-PG-agro.jpg') }}" width="105px"/></td>
			<td colspan="3"><div align="center" class="style1">SURAT PERINTAH PERJALANAN <p>NOMOR : {{ $r->bookNumber }}</P> </div></td>
			<td width="142">&nbsp;</td>
		  </tr>
		  <tr>
		    <td bgcolor="#CCCCCC"><div align="center" class="style1">Nama / Nik</div></td>
		    <td width="111" bgcolor="#CCCCCC" ><div align="center" class="style1">Tujuan</div></td>
		    <td width="49" bgcolor="#CCCCCC" ><div align="center" class="style1">Lama Perjalanan</div></td>
		    <td width="89" bgcolor="#CCCCCC" ><span class="style1">Berangkat : </span></td>
		    <td bgcolor="#CCCCCC"><div align="center" class="style1">Kendaraan</div></td>
	      </tr>
		  <tr>
		    <td><div align="center"><span class="style2">{{ $r->registerDriver}}/{{ $r->idNumberDriver}}</span></div></td>
		    <td ><span class="style1">&nbsp; {{ $r->tripDestination }}</span></td>
		    <td ><div align="center"><span class="style1">{{ $r->lama }} (Hari)</span></div></td>
		    <td ><span class="style1">Tanggal : {{ $r->tripStart }}<b>Jam : {{ $r->timeStart }}</b></span></td>
		    <td><span class="style1">&nbsp;{{ $r->vehicleBrand }} - {{ $r->vehicleType }} ({{ $r->registerNumber0 }})</span></td>
	      </tr>
</table>
	<table align="center" width="530" rules="all">
  <tr>
    <td colspan="2"><span class="style1">&nbsp;Pemakai Dep/Biro/Bidang  &nbsp;:&nbsp; {{ $r->unitLv2 }}<br>
    &nbsp;Keperluan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{ $r->tripDescription }} </br><br>&nbsp;Stand By di&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;:&nbsp; {{ $r->pickUpLocation }}<br/></span></span></td>
    <td colspan="2"><span class="style1">&nbsp;Oddo Meter Berangkat  &nbsp;:&nbsp; {{ $r->oddoStart }}<br>
    &nbsp;Oddo Meter Kembali&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{{ $r->oddoEnd }} </br><br>&nbsp;Kembali Tgl / Jam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; {{ $r->tripEnd }}/{{ $r->	timeEnd }}<br/>&nbsp;Nomor Telpon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; {{ $r->phoneDriver }}<br/>
    </span>
    </span></td> 
  </tr>
  <tr>
    <td width="141"><div align="center" class="style1">
      <p align="center" class="style1">Yang Ditugaskan </p>
      <p align="center" class="style1">&nbsp;</p>
      <p align="center" class="style1">&nbsp;</p>
      <p align="center" class="style1">{{ $r->registerDriver }}</p>
    </div></td>
    <td colspan="2"><p align="center" class="style1">Menyetujui Pemakai </p>
      <p align="center" class="style1">&nbsp;</p>
    <p align="center" class="style1">&nbsp;</p>
    <p align="center" class="style1">{{ $r->registerKaryawan }}</p></td>
    <td width="176"><p align="center" class="style1">Yang Menugaskan</p>
    <p align="center" class="style1">&nbsp;</p>
    <p align="center" class="style1">&nbsp;</p>
    <p align="center" class="style1">................................................ </p></td>
  </tr>
</table>		
</body>
                      
 @endforeach                 
                     
