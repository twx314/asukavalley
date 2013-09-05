

$(document).ready(function() {
	$(".Screenshot").fancybox({
		prevEffect	: 'fade',
		nextEffect	: 'fade',
		helpers	: {
			overlay : {
				locked	: false
			}
		}
	});
});




function ConvertToRadians (angle) {
  return angle * (Math.PI / 180);
}

function drawHexagon(id,CenterX,CenterY,radius,s1,s2,s3,s4,s5,s6)
{
	var c=document.getElementById(id);
	var ctx=c.getContext("2d");	
	
	var Category = new Array('熱血','萌','愛情','血腥','爆笑','感動');
	var Score = new Array();
	Score[0] = s1;
	Score[1] = s2;
	Score[2] = s3;
	Score[3] = s4;
	Score[4] = s5;
	Score[5] = s6;
	
	var r = new Array();
	r[0] = radius;
	r[1] = radius*0.8;
	r[2] = radius*0.6;
	r[3] = radius*0.4;
	r[4] = radius*0.2;
	
	var x = CenterX;
	var y = CenterY;
	
	var X1 =new Array(); 
	var Y1 =new Array(); 
	var X2 =new Array(); 
	var Y2 =new Array(); 
	var X3 =new Array(); 
	var Y3 =new Array(); 
	var X4 =new Array(); 
	var Y4 =new Array(); 
	var X5 =new Array(); 
	var Y5 =new Array(); 	
	var X5 =new Array(); 
	var Y5 =new Array(); 
	var X6 =new Array(); 
	var Y6 =new Array(); 
	
	for (i=0; i<=4; i++)
	{
		X1[i] = x;
		Y1[i] = y-r[i];
		X2[i] = x + (r[i] * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));	
		Y2[i] = y - (r[i] * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
		X3[i] = x + (r[i] * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));
		Y3[i] = y + (r[i] * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
		X4[i] = x;
		Y4[i] = y+r[i];
		X5[i] = x - (r[i] * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));	
		Y5[i] = y + (r[i] * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
		X6[i] = x - (r[i] * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));
		Y6[i] = y - (r[i] * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));	
	}
	

//---Drawing line from center point -------------------------------------------------
	
		ctx.moveTo(x,y);
		ctx.lineTo(X1[0],Y1[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X2[0],Y2[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X3[0],Y3[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X4[0],Y4[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X5[0],Y5[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X6[0],Y6[0]);
		ctx.strokeStyle= "#000";
		ctx.lineWidth= 2;
		ctx.stroke();

//---Drawing Hexagon ----------------------------------------------------------------		

//i=0 : outer black Hexagon
//i=1.2.3.4 = inner grey Hexagon

	for (i=0; i<=4; i++)
	{

		ctx.beginPath();
		ctx.moveTo(X1[i],Y1[i]);
		ctx.lineTo(X2[i],Y2[i]);
		ctx.lineTo(X3[i],Y3[i]);
		ctx.lineTo(X4[i],Y4[i]);
		ctx.lineTo(X5[i],Y5[i]);
		ctx.lineTo(X6[i],Y6[i]);
		ctx.lineJoin = 'round';
		ctx.closePath();
		
		if(i==0)
		{
			ctx.lineWidth= 3;
			ctx.strokeStyle= "#000";
			ctx.fillStyle="rgba(255,255,255,0.75)";
			ctx.fill();
		}
		
		else
		{
			ctx.lineWidth= 1;
			ctx.strokeStyle= "#CCC";	
		}
	
		ctx.stroke();
	}
	
//---Adding title ------------------------------------------------------------------
	
	ctx.font = "16px Arial bold";
	ctx.textAlign = 'center';
	ctx.fillStyle="rgba(0,0,0,0.8)";
	ctx.fillText(Category[0],X1[0],Y1[0]-10);
	ctx.fillText(Category[1],X2[0]+15,Y2[0]-10);
	ctx.fillText(Category[2],X3[0]+25,Y3[0]+20);
	ctx.fillText(Category[3],X4[0],Y4[0]+20);
	ctx.fillText(Category[4],X5[0]-20,Y5[0]+20);
	ctx.fillText(Category[5],X6[0]-20,Y6[0]-10);
	
	ctx.font = "24px Microsoft YaHei bold";
	ctx.textAlign = 'center';
	ctx.fillStyle="rgba(0,0,0,0.8)";
	ctx.fillText("故事方針",X1[0],Y1[0]-50);

//---Drawing skill level-------------------------------------------------------------

	var S1=Score[0]*r[0];
	var S2=Score[1]*r[0];
	var S3=Score[2]*r[0];
	var S4=Score[3]*r[0];
	var S5=Score[4]*r[0];
	var S6=Score[5]*r[0];
			
	var SX1=x;
	var SY1=y - S1;
	var SX2=x + (S2 * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));
	var SY2=y - (S2 * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
	var SX3=x + (S3 * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));
	var SY3=y + (S3 * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
	var SX4=x
	var SY4=y + S4
	var SX5=x - (S5 * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));
	var SY5=y + (S5 * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
	var SX6=x - (S6 * Math.sin(ConvertToRadians(60)))/Math.sin(ConvertToRadians(90));
	var SY6=y - (S6 * Math.sin(ConvertToRadians(30)))/Math.sin(ConvertToRadians(90));
	
	ctx.beginPath();
	ctx.moveTo(SX1,SY1);
	ctx.lineTo(SX2,SY2);
	ctx.lineTo(SX3,SY3);
	ctx.lineTo(SX4,SY4);
	ctx.lineTo(SX5,SY5);
	ctx.lineTo(SX6,SY6);
	ctx.lineJoin = 'round';
	ctx.fillStyle="rgba(255,0,0,0.5)";
	ctx.fill();
	ctx.lineWidth= 2;
	ctx.strokeStyle= "#000";
	ctx.closePath();
	ctx.stroke();
	
//---Drawing middle dot----------------------------------------------------------------

	ctx.beginPath();
	ctx.fillRect(x-3,y-3,6,6);
	ctx.strokeStyle= "#000";
	ctx.stroke();
	

	
	
} // End of Hexagon



function drawPenta(id,CenterX,CenterY,radius,s1,s2,s3,s4,s5)
{
	var c=document.getElementById(id);
	var ctx=c.getContext("2d");	
	
	var Category = new Array('故事','繪畫','音樂','系統','人設');
	var Score = new Array();
	Score[0] = s1;
	Score[1] = s2;
	Score[2] = s3;
	Score[3] = s4;
	Score[4] = s5;
	
	var r = new Array();
	r[0] = radius;
	r[1] = radius*0.8;
	r[2] = radius*0.6;
	r[3] = radius*0.4;
	r[4] = radius*0.2;
	
	var x = CenterX;
	var y = CenterY;
	
	var s = new Array();
	s[0] = r[0] * Math.sin(ConvertToRadians(72))/Math.sin(ConvertToRadians(54));
	s[1] = r[1] * Math.sin(ConvertToRadians(72))/Math.sin(ConvertToRadians(54));
	s[2] = r[2] * Math.sin(ConvertToRadians(72))/Math.sin(ConvertToRadians(54));
	s[3] = r[3] * Math.sin(ConvertToRadians(72))/Math.sin(ConvertToRadians(54));
	s[4] = r[4] * Math.sin(ConvertToRadians(72))/Math.sin(ConvertToRadians(54));
	
	var X1 =new Array(); 
	var Y1 =new Array(); 
	var X2 =new Array(); 
	var Y2 =new Array(); 
	var X3 =new Array(); 
	var Y3 =new Array(); 
	var X4 =new Array(); 
	var Y4 =new Array(); 
	var X5 =new Array(); 
	var Y5 =new Array(); 	
	
	for (i=0; i<=4; i++)
	{
		X1[i] = x;
		Y1[i] = y-r[i];
		X2[i] = X1[i] + s[i] * Math.sin(ConvertToRadians(54));	
		Y2[i] = Y1[i] + s[i] * Math.sin(ConvertToRadians(36));
		X3[i] = X2[i] - s[i] * Math.sin(ConvertToRadians(18));
		Y3[i] = Y2[i] + s[i] * Math.sin(ConvertToRadians(72));
		X4[i] = X3[i] - s[i];
		Y4[i] = Y3[i];
		X5[i] = X4[i] - s[i] * Math.sin(ConvertToRadians(18));
		Y5[i] = Y4[i] - s[i] * Math.sin(ConvertToRadians(72));		
	}
	

//---Drawing line from center point -------------------------------------------------
	
		ctx.moveTo(x,y);
		ctx.lineTo(X1[0],Y1[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X2[0],Y2[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X3[0],Y3[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X4[0],Y4[0]);
		ctx.moveTo(x,y);
		ctx.lineTo(X5[0],Y5[0]);
		ctx.strokeStyle= "#000";
		ctx.lineWidth= 2;
		ctx.stroke();

//---Drawing Pentagon ----------------------------------------------------------------		

//i=0 : outer black pentagon
//i=1.2.3.4 = inner grey pentagon

	for (i=0; i<=4; i++)
	{

		ctx.beginPath();
		ctx.moveTo(X1[i],Y1[i]);
		ctx.lineTo(X2[i],Y2[i]);
		ctx.lineTo(X3[i],Y3[i]);
		ctx.lineTo(X4[i],Y4[i]);
		ctx.lineTo(X5[i],Y5[i]);
		ctx.lineJoin = 'round';
		ctx.closePath();
		
		if(i==0)
		{
			ctx.lineWidth= 3;
			ctx.strokeStyle= "#000";
			ctx.fillStyle="rgba(255,255,255,0.75)";
			ctx.fill();
		}
		
		else
		{
			ctx.lineWidth= 1;
			ctx.strokeStyle= "#CCC";	
		}
	
		ctx.stroke();
	}
	
//---Adding title ------------------------------------------------------------------
	
	ctx.font = "16px Arial bold";
	ctx.textAlign = 'center';
	ctx.fillStyle="rgba(0,0,0,0.8)";
	ctx.fillText(Category[0],X1[0],Y1[0]-10);
	ctx.fillText(Category[1],X2[0]+15,Y2[0]-15);
	ctx.fillText(Category[2],X3[0]+10,Y3[0]+20);
	ctx.fillText(Category[3],X4[0]-10,Y4[0]+20);
	ctx.fillText(Category[4],X5[0]-15,Y5[0]-15);
	
	ctx.font = "24px Microsoft YaHei bold";
	ctx.textAlign = 'center';
	ctx.fillStyle="rgba(0,0,0,0.8)";
	ctx.fillText("遊戲評價",X1[0],Y1[0]-50);

//---Drawing skill level-------------------------------------------------------------

	var S1=Score[0]*r[0];
	var S2=Score[1]*r[0];
	var S3=Score[2]*r[0];
	var S4=Score[3]*r[0];
	var S5=Score[4]*r[0];
	
	var SX1=x;
	var SY1=y - S1;
	var SX2=x + S2 * Math.sin(ConvertToRadians(72));
	var SY2=y - S2 * Math.sin(ConvertToRadians(18));
	var SX3=x + S3 * Math.sin(ConvertToRadians(36));
	var SY3=y + S3 * Math.sin(ConvertToRadians(54)); 
	var SX4=x - S4 * Math.sin(ConvertToRadians(36));
	var SY4=y + S4 * Math.sin(ConvertToRadians(54));
	var SX5=x - S5 * Math.sin(ConvertToRadians(72));
	var SY5=y - S5 * Math.sin(ConvertToRadians(18));
	
	ctx.beginPath();
	ctx.moveTo(SX1,SY1);
	ctx.lineTo(SX2,SY2);
	ctx.lineTo(SX3,SY3);
	ctx.lineTo(SX4,SY4);
	ctx.lineTo(SX5,SY5);
	ctx.lineJoin = 'round';
	ctx.fillStyle="rgba(255,0,0,0.5)";
	ctx.fill();
	ctx.lineWidth= 2;
	ctx.strokeStyle= "#000";
	ctx.closePath();
	ctx.stroke();
	
//---Drawing middle dot----------------------------------------------------------------

	ctx.beginPath();
	ctx.fillRect(x-3,y-3,6,6);
	ctx.strokeStyle= "#000";
	ctx.stroke();
	
} // End of drawPenta