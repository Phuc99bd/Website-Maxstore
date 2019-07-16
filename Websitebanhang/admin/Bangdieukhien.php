<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var gmap = new google.maps.LatLng(10.9806545,106.672259,17);
var marker;
function initialize()
{
    var mapProp = {
         center:new google.maps.LatLng(10.9806545,106.672259,17),
         zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
 
    var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);
 
  var styles = [
    {
      featureType: 'road.arterial',
      elementType: 'all',
      stylers: [
        { hue: '#fff' },
        { saturation: 100 },
        { lightness: -48 },
        { visibility: 'on' }
      ]
    },{
      featureType: 'road',
      elementType: 'all',
      stylers: [
 
      ]
    },
    {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [
            { color: '#adc9b8' }
        ]
    },{
        featureType: 'landscape.natural',
        elementType: 'all',
        stylers: [
            { hue: '#809f80' },
            { lightness: -35 }
        ]
    }
  ];
 
  var styledMapType = new google.maps.StyledMapType(styles);
  map.mapTypes.set('Styled', styledMapType);
 
  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: gmap
  });
  google.maps.event.addListener(marker, 'click', toggleBounce);
}
 
function toggleBounce() {
 
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
 
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style type="text/css">
	.fa-shopping-cart:before {
    content: "\f07a";}
    .control-head{
    	width: 100%;
    	position: relative;
    }
    .control-text{
    	position: relative;
    	padding: 5px 8px;
    	text-transform: uppercase;
    	background-color: #1E91CF;
    	color: #FFF;
    	font-size: 14px;
    	margin: 0;
    }
    .pull-right{
    	padding-left: 5%;
    	float: right;

    }
    .control-body{
    padding: 0;
    margin:0;
    background-color: #279FE0;
    color: #FFFFFF;
    transition: all 1s;
    }
    .icon{
    	padding: 10px 20px;
		font-size: 50px;
		opacity: 0.3;
    }
    .icon:hover{
    	opacity: 1;
    }
    .count{
    	float: right;
    	padding: 10px 20px;
    }
    .control-footer{
    	background: #3DA9E3;
    }
    .a-footer{
    	color: #fff;
    	font-size: 14px;
    	padding: 10px 10px;
    }
    .a-footer:hover{
		color: #fff;
		text-decoration: none;
    }
    .panel-default{
    	    border: 1px solid #e8e8e8;
    border-top: 2px solid #bfbfbf;
    }
    .panel-title{
    	font-size: 16px;
    	padding: 10px 20px;
    }
    .list-group-item{
    	font-size: 14px;
    }
    table thead tr{
    	font-size: 13px;
    	font-weight: 600;
    }
      table tbody tr{
    	font-size: 13px;
    	margin-bottom: 0px;
    }
}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			 <div><p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Bảng điều khiển</li>
         </ul></p></div>
		</div>
		<div class="col-md-3">
			<div class="control-head">
				<p class="control-text">Tổng số đơn hàng <span class="pull-right">
      			  0%</span></p>
				<div class="control-body">
					<i class="fa fa-shopping-cart icon"></i>
					<h2 class="count">6</h2>
				</div>
				<div class="control-footer">
					<a href="#" class="a-footer">Xem thêm....</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="control-head">
				<p class="control-text"> Doanh số <span class="pull-right">
      			  0%</span></p>
				<div class="control-body">
					<i class="fa fa-credit-card icon"></i>
					<h2 class="count">1.9M</h2>
				</div>
				<div class="control-footer">
					<a href="#" class="a-footer">Xem thêm....</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="control-head">
				<p class="control-text">Tổng số khách hàng <span class="pull-right">
      			  0%</span></p>
				<div class="control-body">
					<i class="fa fa-user icon"></i>
					<h2 class="count">4</h2>
				</div>
				<div class="control-footer">
					<a href="#" class="a-footer">Xem thêm....</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="control-head">
				<p class="control-text">Khách hàng truy cập <span class="pull-right">
      			  0%</span></p>
				<div class="control-body">
					<i class="fa fa-users icon"></i>
					<h2 class="count">1.9M</h2>
				</div>
				<div class="control-footer">
					<a href="#" class="a-footer">Xem thêm....</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row" style="margin-top: 3%;">
		<div class="col-md-12" style="margin-bottom: 2%;">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h4 class="panel-title"><i class="fa fa-globe"></i>&emsp; Bản đồ</h4>
			  </div>
		</div>
		<div id="googleMap" style="width: 100%; height: 400px;">Google Map</div>
	</div>
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h4 class="panel-title"><i class="fa fa-calendar"></i>&emsp; Thống kê Website</h4>
			  </div>
			  <ul class="list-group">
			        <li class="list-group-item text-center">Chưa có Thông tin!</li>
			      </ul>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h4 class="panel-title"><i class="fa fa-shopping-cart"></i>&emsp;Đơn hàng mới nhất</h4>
			  </div>
			 <table class="table">
			 	<thead>
			 		<tr>
			 		<td>Mã đơn hàng</td>
			 		<td>Tên khách hàng</td>
			 		<td>Trạng thái</td>
			 		<td>Thời gian đặt hàng</td>
			 		<td>Thành tiền</td>
			 		<td>Hành động</td></tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 		<td class="text-center">wad</td>
			 		<td class="text-center">Têna</td>
			 		<td class="text-center">Thờig</td>
			 		<td class="text-center">Thành </td>
			 		<td class="text-center">Thành </td>
			 		<td class="text-center"><a href="" class="btn btn-info" data-original-title="Xem"><i class="fa fa-eye"></i></a></td>
			 	</tr>
			 	</tbody>
			 </table> 
			</div>
		</div>

	</div>
</div>