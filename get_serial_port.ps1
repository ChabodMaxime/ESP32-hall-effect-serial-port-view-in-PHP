$port= new-Object System.IO.Ports.SerialPort COM3,115200,None,8,one
Try
{
 $port.Open()
 $port.ReadLine()
}
Catch
{
 Write-Host "Error"
 Break
}

$port.Close()

