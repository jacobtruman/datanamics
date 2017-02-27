<?php
   $ADO_NUM = 1;
   $ADO_ASSOC = 2;
   $ADO_BOTH = 3;
   
   function ado_connect( $dsn )
   {
       $link = new COM('ADODB.Connection');
       $link->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dsn");
       return $link;
   }
   
   function ado_close( $link )
   {
       $link->Close();
   }
   
   function ado_num_fields( $rs )
   {
       return $rs->Fields->Count;
   }
   
   function ado_error($link)
   {
       return $link->Errors[$link->Errors->Count-1]->Number;
   }
   
   function ado_errormsg($link)
   {
       return $link->Errors[$link->Errors->Count-1]->Description;
   }
   
   function ado_fetch_array( $rs, $result_type,  $row_number = -1 )
   {
       global $ADO_NUM, $ADO_ASSOC, $ADO_BOTH;
       if( $row_number > -1 )
           $rs->Move( $row_number, 1 );
       
       if( $rs->EOF )
           return false;
       
       $ToReturn = array();
       for( $x = 0; $x < ado_num_fields($rs); $x++ )
       {
           if( $result_type == $ADO_NUM || $result_type == $ADO_BOTH )
               $ToReturn[ $x ] = $rs->Fields[$x]->Value;
           if( $result_type == $ADO_ASSOC || $result_type == $ADO_BOTH )
               $ToReturn[ $rs->Fields[$x]->Name ] = $rs->Fields[$x]->Value;
       }
       $rs->MoveNext();
       return $ToReturn;
   }
   
   function ado_num_rows( $rs )
   {
       return $rs->RecordCount;
   }
   
   function ado_free_result( $rs )
   {
       $rs = null;
   }
   
   function ado_query( $link, $query )
   {
       return $link->Execute($query);
   }
   
   function ado_fetch_assoc( $rs,  $row_number = -1 )
   {
       global $ADO_ASSOC;
       return  ado_fetch_array( $rs, $ADO_ASSOC, $row_number);
   }
   
   function ado_fetch_row( $rs,  $row_number = -1 )
   {
       global $ADO_NUM;
       return ado_fetch_array( $rs, $ADO_NUM, $row_number);
   }
   
   function ado_field_len( $rs, $field_number )
   {
       return $rs->Fields[$field_number]->Precision;
   }
   
   function ado_field_name( $rs, $field_number )
   {
       return $rs->Fields[$field_number]->Name;
   }
   
   function ado_field_scale( $rs, $field_number )
   {
       return $rs->Fields[$field_number]->NumericScale;
   }
   
   function ado_field_type( $rs, $field_number )
   {
       return $rs->Fields[$field_number]->Type;
   }
?>