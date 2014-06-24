
//****************************************************************
//* 名　　称：IsPlusNumeric
//* 功    能：判断是否为正确的正数（可以含小数部分）
//* 入口参数：fData：要检查的数据
//* 出口参数：True：正确的正数，或者空                             
//*           False：错误的正数
//* 错误信息：
//*****************************************************************
function IsPlusNumeric(fData)
{
    if (IsEmpty(fData))
        return true
    if ((isNaN(fData)) || (fData.indexOf("-")!=-1))
        return false
    return true   
}

function IsEmpty(fData)
{
    return ((fData==null) || (fData.length==0) )
}