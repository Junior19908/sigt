<?php

include_once "Conexao.class.php";
include_once "Funcoes.class.php";

class Funcionario {

    private $con;
    private $objfc;
    private $veiculo;
    private $nome;
    private $matricula;
    private $sistemagsg;
    private $custo;
    private $identf;
    private $fazenda;
    private $contrato;
    private $registration;
    private $cod_identificacao;
    private $password;
    private $userName;
    private $Bomba1;
    private $Bomba2;
    private $Bomba3;
    private $Bomba4;
    private $Bomba5;
    private $Bomba6;
    private $Bomba7;
    private $bmb1;
    private $bmb2;
    private $bmb3;
    private $bmb4;
    private $bmb5;
    private $bmb7;
    private $bmb8;
    private $Tanque1;
    private $Tanque2;
    private $Tanque3;
    private $Tanque4;
    private $Tanque5;
    private $Tanque6;
    private $afericao;
    private $entrada;
    private $manute;
    private $manuts;
    private $Date;
    private $Tipo;
    private $placa_veiculo;
    private $SelectCombust;
    private $Consult;
    private $id_user;

    public function __construct(){
        $this->con = new Conexao();
        $this->objfc = new Funcoes();
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }

    public function queryInsert($dados){
        try{
            //Faz a Consulta no Banco de Dados e Insere o ultimo lançamento

            if(strlen($dados['password'])<7){
                return 'senha';
            }else{
                $this->registration = $dados['registration'];
                $SQL_RESULTADO = $this->con->conectar()->prepare("SELECT * FROM `tb_user` WHERE regist_user = :matricula");
                $SQL_RESULTADO->bindParam(":matricula", $this->registration, PDO::PARAM_STR);
                $SQL_RESULTADO->execute();
                $QUERY_RESULTADO = $SQL_RESULTADO->fetch(PDO::FETCH_ASSOC);
    
                if($QUERY_RESULTADO == 0){
                  $this->nome = $dados['name'];
                  $this->registration = $dados['registration'];
                  $this->password = sha1($dados['password']."fire@usga#SistemaGSG");
                  $this->userName = $dados['username'];
                  $cst = $this->con->conectar()->prepare("INSERT INTO `tb_user` (`nome_user`, `login_user`, `pass_user`, `regist_user`, `status_user`, `type_user`, `avatar`,`date`, `updategsg`) VALUES (:nome, :username, :password, :registration, 1, 2, 'avatar04.png', CURDATE(), 1);");
                  $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                  $cst->bindParam(":username", $this->userName, PDO::PARAM_STR);
                  $cst->bindParam(":password", $this->password, PDO::PARAM_STR);
                  $cst->bindParam(":registration", $this->registration, PDO::PARAM_STR);
                  if($cst->execute()){
                      return 'ok';
                  }else{
                      return 'erro';
                  }
                }
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function CadastroUser($dados){
        try{
            $this->registration = $dados['registration'];
            $SQL_RESULTADO = $this->con->conectar()->prepare("SELECT * FROM `tb_user` WHERE regist_user = :matricula");
            $SQL_RESULTADO->bindParam(":matricula", $this->registration, PDO::PARAM_STR);
            $SQL_RESULTADO->execute();
            $QUERY_RESULTADO = $SQL_RESULTADO->fetch(PDO::FETCH_ASSOC);

            if($QUERY_RESULTADO == 0){
                $this->nome = $dados['name'];
                $this->registration = $dados['registration'];
                $this->password = sha1($dados['password']."fire@usga#SistemaGSG");
                $this->userName = $dados['username'];
                $this->StatusUser = $dados['SelectStatus'];
                $this->TipoUser = $dados['SelectTypeUser'];
                $cst = $this->con->conectar()->prepare("INSERT INTO `tb_user` (`nome_user`, `login_user`, `pass_user`, `regist_user`, `status_user`, `type_user`) VALUES (:nome, :username, :password, :registration, :StatusUser, :TipoUser);");
                $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
                $cst->bindParam(":username", $this->userName, PDO::PARAM_STR);
                $cst->bindParam(":password", $this->password, PDO::PARAM_STR);
                $cst->bindParam(":registration", $this->registration, PDO::PARAM_STR);
                $cst->bindParam(":StatusUser", $this->StatusUser, PDO::PARAM_STR);
                $cst->bindParam(":TipoUser", $this->TipoUser, PDO::PARAM_STR);
                if($cst->execute()){
                    return 'ok';
                }else{
                    return 'erro';
                }
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryContainers($dados){
        try{
            $this->MensagemChat = $dados['story'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_containers` (`texto`) VALUES (:ChatMes);");
            $cst->bindParam(":ChatMes", $this->MensagemChat, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function DeletarOvs($dados){
        try{
            $this->OVId = $dados['OrdIDelet'];
            $DELETE = $this->con->conectarFaturamento()->prepare("DELETE FROM `tb_ordem_venda` WHERE `ID` = :DeletarOVID;");
            $DELETE->bindParam(":DeletarOVID", $this->OVId, PDO::PARAM_INT);
            if($DELETE->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function ModfOvsMesCIA($dados){
        try{
            $this->IDOV=$dados['OrdID'];
            $this->TSOv=$dados['Posit'];
            $this->TPOvS=$dados['TipoSe'];
            $this->QtdCon=$dados['Quant'];
            $this->PediN=$dados['PedidoN'];
            $this->Emissor=$dados['Emissor'];
            $this->Safra=$dados['Safra'];
            $this->SaidaOVAlt=$dados['SaldoRestovAlterada'];
            $cst = $this->con->conectarFaturamento()->prepare("UPDATE `tb_ordem_venda` SET `Qtd_conf` = :QuantC, `UM` = :SlecOv, `col_TipoOV` = :TpSelOV, `N_pedido` = :PedidoN, `Nome_1` = :EmissorOv, `SAFRA` = :sSafra, `Preco_liq` = :sOVAlter WHERE ID = :TipoOV;");
            $cst->bindParam(":TipoOV", $this->IDOV, PDO::PARAM_STR);
            $cst->bindParam(":SlecOv", $this->TSOv, PDO::PARAM_STR);
            $cst->bindParam(":TpSelOV", $this->TPOvS, PDO::PARAM_STR);
            $cst->bindParam(":QuantC", $this->QtdCon, PDO::PARAM_STR);
            $cst->bindParam(":PedidoN", $this->PediN, PDO::PARAM_STR);
            $cst->bindParam(":EmissorOv", $this->Emissor, PDO::PARAM_STR);
            $cst->bindParam(":sSafra", $this->Safra, PDO::PARAM_STR);
            $cst->bindParam(":sOVAlter", $this->SaidaOVAlt, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        }catch(PDOExceprion $ex){
            return 'error '.$ex->getMessage();
        }
    }
    //Criar Atualização das Saídas
    public function ModfOvsSaida($dados){
        try{
            $this->IDOV=$dados['OrdID'];
            $this->SAFRAOV=$dados['Safra'];
            $this->SATUSOV=$dados['StatusP'];
            $cst = $this->con->conectarFaturamento()->prepare("UPDATE `tb_saida_semana` SET `SAFRA` = :sAFRAORD, `col_status` = :sTATUORD WHERE ID_SAIDA = :iDENTORD;");
            $cst->bindParam(":iDENTORD", $this->IDOV, PDO::PARAM_STR);
            $cst->bindParam(":sAFRAORD", $this->SAFRAOV, PDO::PARAM_STR);
            $cst->bindParam(":sTATUORD", $this->SATUSOV, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        }catch(PDOExceprion $ex){
            return 'error '.$ex->getMessage();
        }
    }
    public function ModfContratos($dados){
        try{
            $this->POSIT_TB = $dados['Posit'];
            $SQL_RESULTADO = $this->con->conectarFaturamento()->prepare("SELECT * FROM `tb_ord_contratos_posicao` WHERE col_id_position = :matricula AND col_status!=2 ORDER BY col_id_position ASC, col_id ASC LIMIT 1;");
            $SQL_RESULTADO->bindParam(":matricula", $this->POSIT_TB, PDO::PARAM_STR);
            $SQL_RESULTADO->execute();
            $QUERY_RESULTADO = $SQL_RESULTADO->fetch(PDO::FETCH_ASSOC);
            
            $ID_TB_POSIT = $QUERY_RESULTADO['col_id'];

            $this->IDCONT=$dados['OrdID'];
            $this->Emissor=$dados['Emissor'];
            $this->Quantidade=$dados['Quant'];
            $this->UINODADE=$dados['UNIDADEMEDIDA'];
            $this->PedidoN=$dados['PedidoN'];
            //Verificar esses dois Position######//
            $this->Posit=$dados['Posit'];       #//
            $this->Psoit=$dados['Psoti'];       #//
            //###################################//
            $this->PositREP=$dados['PositREP'];
            $this->Safra=$dados['Safra'];
            $cst = $this->con->conectarFaturamento()->prepare("UPDATE `tb_contratos` SET `col_nome` = :EmissCont, `col_qtd_contrato` = :QuantCont, `SAFRA` = :sSafra, `col_un` = :UmbCont, `col_nocontrato_cliente` = :PedidoCont, `col_position` = :PositCont, `col_repres` = :PositRepres, `col_id_position_tb` = $ID_TB_POSIT WHERE col_id = :IdContrato;");
            $cst->bindParam(":IdContrato", $this->IDCONT, PDO::PARAM_STR);
            $cst->bindParam(":EmissCont", $this->Emissor, PDO::PARAM_STR);
            $cst->bindParam(":QuantCont", $this->Quantidade, PDO::PARAM_STR);
            $cst->bindParam(":UmbCont", $this->UINODADE, PDO::PARAM_STR);
            $cst->bindParam(":PedidoCont", $this->PedidoN, PDO::PARAM_STR);
            $cst->bindParam(":PositCont", $this->Posit, PDO::PARAM_STR);
            $cst->bindParam(":PositRepres", $this->PositREP, PDO::PARAM_STR);
            $cst->bindParam(":sSafra", $this->Safra, PDO::PARAM_STR);
            if ($dados['Posit']==0||$dados['Posit']==1) {
                $this->Identificador_Tabela_Positon=$dados['ColTabelaPosit'];
                $cod = $this->con->conectarFaturamento()->prepare("UPDATE `tb_ord_contratos_posicao` SET `col_status` = '1' WHERE col_id = :ID_TBPositon;");
                $cod->bindParam(":ID_TBPositon", $this->Identificador_Tabela_Positon, PDO::PARAM_STR);
                $cod->execute();
            }else {
                $cod = $this->con->conectarFaturamento()->prepare("UPDATE `tb_ord_contratos_posicao` SET `col_status` = '2' WHERE col_id = $ID_TB_POSIT;");
                $cod->execute();
            }

            $REP_OV = $dados['PositREP'];
            $CONTRATO = $dados['gsgModalLabel'];
            $ALTER_REP_OV = $this->con->conectarFaturamento()->prepare("UPDATE `tb_ordem_venda` SET `UM` = $REP_OV WHERE `N_pedido` = '$CONTRATO';");
            $ALTER_REP_OV->execute();


            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        }catch(PDOExceprion $ex){
            return 'error '.$ex->getMessage();
        }
    }
    public function InserirOV($dados){
        try{
            $this->OV=$dados['OrdemV'];
            $this->QTD=$dados['QuantC'];
            $this->UNM=$dados['UMB'];
            $this->NM=$dados['Nome1'];
            $this->PST=$dados['Posit'];
            $this->DATAov=$dados['calendario'];
            $this->USR=$dados['User'];
            $this->SAFR=$dados['Safra'];
            $cst = $this->con->conectarFaturamento()->prepare("INSERT INTO `tb_ordem_venda` (`Doc_SD`, `Itm`, `Div_ITEM`, `Denominacao`, `TpDV`, `Data_doc`, `Qtd_conf`, `N_pedido`, `Criado_a`, `Qtd_ordem`, `Dep`, `UMB`, `Nome_1`, `Preco_liq`, `SAFRA`, `UM`, `Val_liq`, `MATERIAL`, `col_TipoOV`) VALUES (:nmbOV, NULL, '1', NULL, NULL, :dtOV, :qtdOV, NULL, NULL, NULL, NULL, :unOV, :nmOV, NULL, :UsAFRA, :pstOV, :usOV, '100000', 'V. Mercado Interno')");
            $cst->bindParam(":nmbOV", $this->OV, PDO::PARAM_STR);
            $cst->bindParam(":qtdOV", $this->QTD, PDO::PARAM_STR);
            $cst->bindParam(":unOV", $this->UNM, PDO::PARAM_STR);
            $cst->bindParam(":nmOV", $this->NM, PDO::PARAM_STR);
            $cst->bindParam(":pstOV", $this->PST, PDO::PARAM_STR);
            $cst->bindParam(":dtOV", $this->DATAov, PDO::PARAM_STR);
            $cst->bindParam(":usOV", $this->USR, PDO::PARAM_STR);
            $cst->bindParam(":UsAFRA", $this->SAFR, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        }catch(PDOExceprion $ex){
            return 'error '.$ex->getMessage();
        }
    }
    public function InserirSaidaOV($dados){
        try{
            $this->OV=$dados['OrdemV'];
            $this->QTD=$dados['QuantC'];
            $this->UNM=$dados['UMB'];
            $this->NM=$dados['Nome1'];
            $this->DATAov=$dados['calend'];
            $this->SAFR=$dados['Safra'];
            $this->ExbRel=$dados['ExibRel'];
            $this->ValorCNf=$dados['ValorC'];
            $this->EstanoNF=$dados['EstadoMun'];
            $this->CidadeNF=$dados['CidadeMun'];
            $cst = $this->con->conectarFaturamento()->prepare("INSERT INTO `tb_saida_semana` (`DOC`, `ORG`, `CANAL`, `SETOR`, `USER_SAP`, `CENTRO`, `COD_EMPR`, `NOME`, `CNPJ`, `REC_MERC`, `EMISSO_MER`, `COD_RECEB`, `CNPJ_RECEB`, `CIDADE`, `ESTADO`, `CFOP`, `DESCRICAO`, `PEDIDO`, `ORDEM`, `TIPO_ORDEM`, `FATURA`, `TIPO_FAT`, `NFE_NUM`, `NF`, `SERIE`, `TIPO`, `CANCELADA`, `DATA_EMISS`, `GRUPO_MERC`, `MATERIAL`, `DESCRICAO_MAT`, `LOTE`, `UNIDADE`, `QUANTIDADE`, `VL_LIQUIDO`, `VL_BRUTO`, `COD_REP`, `REPRESENTANTE`, `TRANSPORTADORA`, `ACESSO`, `LAUDO`, `SAFRA`, `LOTE_MANUAL`, `DEPOSITO`, `TIPO_EMB`, `QTD_EMB`, `DATA_EMISS_FIM`, `col_status`) VALUES ('0', NULL, '0', '0', NULL, 'USGA', NULL, NULL, NULL, 'bg-success', '0', :nmOV, '0', :CidadNF, :EstNF, '0000/AA', NULL, NULL, :nmbOV, 'ZVRO', NULL, 'ZVRO', '', NULL, NULL, NULL, '', :dtOV, '9410', '100000', NULL, '', :unOV, :qtdOV, NULL, :ValorNF, NULL, 'Grupo Serra Grande', '0', NULL, NULL, :UsAFRA, NULL, '0', '0', NULL, NULL, :RelExibir)");
            $cst->bindParam(":nmbOV", $this->OV, PDO::PARAM_STR);
            $cst->bindParam(":qtdOV", $this->QTD, PDO::PARAM_STR);
            $cst->bindParam(":unOV", $this->UNM, PDO::PARAM_STR);
            $cst->bindParam(":nmOV", $this->NM, PDO::PARAM_STR);
            $cst->bindParam(":dtOV", $this->DATAov, PDO::PARAM_STR);
            $cst->bindParam(":UsAFRA", $this->SAFR, PDO::PARAM_STR);
            $cst->bindParam(":RelExibir", $this->ExbRel, PDO::PARAM_STR);
            $cst->bindParam(":ValorNF", $this->ValorCNf, PDO::PARAM_STR);
            $cst->bindParam(":EstNF", $this->EstanoNF, PDO::PARAM_STR);
            $cst->bindParam(":CidadNF", $this->CidadeNF, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        }catch(PDOExceprion $ex){
            return 'error '.$ex->getMessage();
        }
    }
    public function InserirContratoOV($dados){
        try{
            $this->OV=$dados['OrdemV'];
            $this->QTD=$dados['QuantC'];
            $this->UNM=$dados['UMB'];
            $this->NM=$dados['Nome1'];
            $this->DATAov=$dados['calendcontrato'];
            $this->SAFR=$dados['Safra'];
            $cst = $this->con->conectarFaturamento()->prepare("INSERT INTO `tb_contratos` (`col_docvendas`, `col_item`, `col_tpdv`, `col_centro`, `col_cliente`, `col_nome`, `col_material`, `SAFRA`, `col_nocontrato_cliente`, `col_qtd_contrato`, `col_qtd_pedida`, `col_devolucao`, `col_qtd_pendente`, `col_un`, `col_data`, `col_data_hora_import`, `col_position`) VALUES (:nmbOV, NULL, NULL, NULL, NULL, :nmOV, NULL, :UsAFRA, NULL, :qtdOV, NULL, NULL, NULL, :unOV, :dtOV, NULL, '1')");
            $cst->bindParam(":nmbOV", $this->OV, PDO::PARAM_STR);
            $cst->bindParam(":qtdOV", $this->QTD, PDO::PARAM_STR);
            $cst->bindParam(":unOV", $this->UNM, PDO::PARAM_STR);
            $cst->bindParam(":nmOV", $this->NM, PDO::PARAM_STR);
            $cst->bindParam(":dtOV", $this->DATAov, PDO::PARAM_STR);
            $cst->bindParam(":UsAFRA", $this->SAFR, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        }catch(PDOExceprion $ex){
            return 'error '.$ex->getMessage();
        }
    }
    public function queryBooking($dados){
        try{
            $this->Navio = $dados['Navio'];
            $this->Booking = $dados['Booking'];
            $cst = $this->con->conectarFaturamento()->prepare("INSERT INTO `tb_booking` (`col_navio`, `col_Booking`,`col_status`) VALUES (:Navio, :Booking, '1');");
            $cst->bindParam(":Navio", $this->Navio, PDO::PARAM_STR);
            $cst->bindParam(":Booking", $this->Booking, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryBookingManual($dados){
        try{
            $this->Navio = $dados['Navio'];
            $this->Booking = $dados['Booking'];
            $this->Containers = $dados['Containers'];
            $this->Situacao = $dados['Situacao'];
            $this->ContainersN = $dados['ContainersN'];
            $this->SituacaoN = $dados['SituacaoN'];
            $this->DataBooking = $dados['DataBooking'];
            $this->DataPeriodo = $dados['DataPeriodo'];
            $this->Finalizado = $dados['Finalizado'];
            $cst = $this->con->conectarFaturamento()->prepare("INSERT INTO `tb_booking` (`col_navio`, `col_Booking`, `col_ctnrs`, `col_situacao`, `col_ctnrsN`, `col_situacaoN`, `dataBooking`, `dataPeriodo`, `col_status`) VALUES (:Navio, :Booking, :Containers, :Situacao, :ContainersN, :SituacaoN, :DataBooking, :DataPeriodo, :Finalizado);");
            $cst->bindParam(":Navio", $this->Navio, PDO::PARAM_STR);
            $cst->bindParam(":Booking", $this->Booking, PDO::PARAM_STR);
            $cst->bindParam(":Containers", $this->Containers, PDO::PARAM_STR);
            $cst->bindParam(":Situacao", $this->Situacao, PDO::PARAM_STR);
            $cst->bindParam(":ContainersN", $this->ContainersN, PDO::PARAM_STR);
            $cst->bindParam(":SituacaoN", $this->SituacaoN, PDO::PARAM_STR);
            $cst->bindParam(":DataBooking", $this->DataBooking, PDO::PARAM_STR);
            $cst->bindParam(":DataPeriodo", $this->DataPeriodo, PDO::PARAM_STR);
            $cst->bindParam(":Finalizado", $this->Finalizado, PDO::PARAM_STR);
            if($dados['Finalizado']==2){
                $cod = $this->con->conectarFaturamento()->prepare("UPDATE `tb_booking` SET `col_status` = '2' WHERE col_Booking = :Booking;");
                $cod->bindParam(":Booking", $this->Booking, PDO::PARAM_STR);
                $cod->execute();
            }
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryCarregaMentoManual($dados){
        try{
            $this->VeiculoArmazem = $dados['VeiculoArmazem'];
            $this->VeiculoPatio = $dados['VeiculoPatio'];
            $this->SacariaArmazem = $dados['SacariaArmazem'];
            $this->SacariaPatio = $dados['SacariaPatio'];
            $this->BigBagArmazem = $dados['BigBagArmazem'];
            $this->BigBagPatio = $dados['BigBagPatio'];
            $this->AnidroArmazem = $dados['AnidroArmazem'];
            $this->AnidroPatio = $dados['AnidroPatio'];
            $this->HidratadoArmazem = $dados['HidratadoArmazem'];
            $this->HidratadoPatio = $dados['HidratadoPatio'];
            $this->periodo = $dados['periodo'];
            $cst = $this->con->conectarFaturamento()->prepare("INSERT INTO `tb_filaphp` (`col_armazem`, `col_patio`, `col_sacariaArmazem`, `col_sacariaPatio`, `col_bagArmazem`, `col_bagPatio`, `col_alcoolArmazem`, `col_alcoolPatio`, `col_hidratadoArmazem`, `col_hidratadoPatio`, `dataPeriodo`) VALUES (:VeiculoArmazem, :VeiculoPatio, :SacariaArmazem, :SacariaPatio, :BigBagArmazem, :BigBagPatio, :AnidroArmazem, :AnidroPatio, :HidratadoArmazem, :HidratadoPatio, :periodo);");
            $cst->bindParam(":VeiculoArmazem", $this->VeiculoArmazem, PDO::PARAM_STR);
            $cst->bindParam(":VeiculoPatio", $this->VeiculoPatio, PDO::PARAM_STR);
            $cst->bindParam(":SacariaArmazem", $this->SacariaArmazem, PDO::PARAM_STR);
            $cst->bindParam(":SacariaPatio", $this->SacariaPatio, PDO::PARAM_STR);
            $cst->bindParam(":BigBagArmazem", $this->BigBagArmazem, PDO::PARAM_STR);
            $cst->bindParam(":BigBagPatio", $this->BigBagPatio, PDO::PARAM_STR);
            $cst->bindParam(":AnidroArmazem", $this->AnidroArmazem, PDO::PARAM_STR);
            $cst->bindParam(":AnidroPatio", $this->AnidroPatio, PDO::PARAM_STR);
            $cst->bindParam(":HidratadoArmazem", $this->HidratadoArmazem, PDO::PARAM_STR);
            $cst->bindParam(":HidratadoPatio", $this->HidratadoPatio, PDO::PARAM_STR);
            $cst->bindParam(":periodo", $this->periodo, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryChat($dados){
        try{
            $this->MensagemChat = $dados['message'];
            $this->UserId = $dados['user_id'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_chat` (`id_user`, `data`, `hora`, `chat`) VALUES (:UserID, NOW(), NOW(), :ChatMes);");
            $cst->bindParam(":ChatMes", $this->MensagemChat, PDO::PARAM_STR);
            $cst->bindParam(":UserID", $this->UserId, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryUpdatePassW($dados){
        try{
            $this->LoginIdUser = $dados['LoginID'];
            $this->password = sha1($dados['password']."fire@usga#SistemaGSG");
            $cst = $this->con->conectar()->prepare("UPDATE `tb_user` SET pass_user = :password WHERE id_user = :LoginIDUser");
            $cst->bindParam(":LoginIDUser", $this->LoginIdUser, PDO::PARAM_STR);
            $cst->bindParam(":password", $this->password, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    

    public function queryRegistroAtividade($dados){
        function uniqidReal($lenght = 13) {
            // uniqid gives 13 chars, but you could adjust it to your needs.
            if (function_exists("random_bytes")) {
                $bytes = random_bytes(ceil($lenght / 2));
            } elseif (function_exists("openssl_random_pseudo_bytes")) {
                $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
            } else {
                throw new Exception("no cryptographically secure random function available");
            }
            return substr(bin2hex($bytes), 0, $lenght);
        }
        try{
            if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
                $arquivoImage = $_FILES['arquivo'];
                $diretorioDestino = 'C:\Program Files\VertrigoServ\www\SIGTI\destino_arq';
                $nomeArquivo = uniqidReal() . '_' . $arquivoImage['name'];
                $caminhoCompleto = $diretorioDestino . '/' . $nomeArquivo;
                $caminhoBancoDados = '../../../../../destino_arq/'.$nomeArquivo;
                move_uploaded_file($arquivoImage['tmp_name'], $caminhoCompleto);    
            }
            $this->material = $dados['CodBarra'];
            $this->lote = $dados['numeroLote'];
            $this->nmNF = $dados['numeroNF'];
            $this->vencimentoLote = $dados['dataVencimentoLote'];
            $this->quantidade = $dados['Quantidade'];
            $this->statusLote = $dados['statusLote'];
            $this->historicoRegistro = $dados['historicoRegistro'];
            $this->userRegistro = $dados['id_user'];
            $this->imagemCaminho = $caminhoBancoDados;
            $this->imagemCaminhoBD = $caminhoCompleto;
            $rgAtividade = $this->con->conectarAlmoxarifado()->prepare("INSERT INTO `tb_registroAtividades` (`col_id`, `col_material`, `col_numeroLote`, `col_vencimentoLote`, `col_quantidade`, `col_status`, `col_historicoAtividade`, `col_user`, `col_path`, `col_pathBD`, `col_requisicao`, `col_isercaoBanco`) VALUES (NULL, :MaterialReg, :LoteReg, :DataLoteReg, :QuantidadeReg, :StatusReg, :HistoricoRegistroAtividade, :UsuarioRegistroAtividade, :caminhoImagem, :caminhoImagemBD, :NFnm, now())");
            $rgAtividade->bindParam(":MaterialReg", $this->material, PDO::PARAM_STR);
            $rgAtividade->bindParam(":LoteReg", $this->lote, PDO::PARAM_STR);
            $rgAtividade->bindParam(":NFnm", $this->nmNF, PDO::PARAM_STR);
            $rgAtividade->bindParam(":DataLoteReg", $this->vencimentoLote, PDO::PARAM_STR);
            $rgAtividade->bindParam(":QuantidadeReg", $this->quantidade, PDO::PARAM_STR);
            $rgAtividade->bindParam(":StatusReg", $this->statusLote, PDO::PARAM_STR);
            $rgAtividade->bindParam(":HistoricoRegistroAtividade", $this->historicoRegistro, PDO::PARAM_STR);
            $rgAtividade->bindParam(":UsuarioRegistroAtividade", $this->userRegistro, PDO::PARAM_STR);
            $rgAtividade->bindParam(":caminhoImagem", $this->imagemCaminho, PDO::PARAM_STR);
            $rgAtividade->bindParam(":caminhoImagemBD", $this->imagemCaminhoBD, PDO::PARAM_STR);
            if ($rgAtividade->execute()) {
                return 'ok';
            }else{
                return 'erro';
            }
        }catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryBombas($dados){
      try{
        $this->id_user=$dados['id_user'];
        $this->Date = $dados['calendario'];
        $tarefa = $this->con->conectar()->prepare("INSERT INTO `tb_tarefas` (`id_tarefa`, `titulo`, `marqCheck`, `data`, `date_now`, `hora`, `id_user`) VALUES (NULL, 'Leitura das Bombas Inserida', 'checked', :date, NOW(), NOW(), :id_user)");
        $tarefa->bindParam(":date", $this->Date, PDO::PARAM_STR);
        $tarefa->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
        $tarefa->execute();
    
          //Faz a Consulta no Banco de Dados e Insere o ultimo lançamento
          $SQL_RESULTADO = $this->con->conectar()->prepare("SELECT * FROM `tb_bomba` WHERE type_bomba != '1' ORDER BY date_bomba DESC");
          $SQL_RESULTADO->execute();
          $QUERY_RESULTADO = $SQL_RESULTADO->fetch(PDO::FETCH_ASSOC);
          $result = $this->con->conectar()->prepare("INSERT INTO `tb_bomba` (`bomba1`, `bomba2`, `bomba3`, `bomba4`, `bomba5`, `bomba7`, `bomba8`, `type_bomba`, `date_bomba`, `now_date`, `id_user`) VALUES (:bomba1_Result, :bomba2_Result, :bomba3_Result, :bomba4_Result, :bomba5_Result, :bomba6_Result, :bomba7_Result, 1, :date, NOW(), :id_user);");
          $this->Bomba1_CONSULTA = $QUERY_RESULTADO['bomba1'];
          $this->Bomba2_CONSULTA = $QUERY_RESULTADO['bomba2'];
          $this->Bomba3_CONSULTA = $QUERY_RESULTADO['bomba3'];
          $this->Bomba4_CONSULTA = $QUERY_RESULTADO['bomba4'];
          $this->Bomba5_CONSULTA = $QUERY_RESULTADO['bomba5'];
          $this->Bomba6_CONSULTA = $QUERY_RESULTADO['bomba7'];
          $this->Bomba7_CONSULTA = $QUERY_RESULTADO['bomba8'];      
          $this->Date = $dados['calendario'];
          $this->id_user=$dados['id_user'];
          $result->bindParam(":bomba1_Result", $this->Bomba1_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":bomba2_Result", $this->Bomba2_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":bomba3_Result", $this->Bomba3_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":bomba4_Result", $this->Bomba4_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":bomba5_Result", $this->Bomba5_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":bomba6_Result", $this->Bomba6_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":bomba7_Result", $this->Bomba7_CONSULTA, PDO::PARAM_STR);
          $result->bindParam(":date", $this->Date, PDO::PARAM_STR);
          $result->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
          $result->execute();
          ////////////////////////////////////////////////////////////////////////////////////////
          $this->Bomba1 = $dados['bomba1'];
          $this->Bomba2 = $dados['bomba2'];
          $this->Bomba3 = $dados['bomba3'];
          $this->Bomba4 = $dados['bomba4'];
          $this->Bomba5 = $dados['bomba5'];
          $this->Bomba6 = $dados['bomba6'];
          $this->Bomba7 = $dados['bomba7'];        
          $this->Date = $dados['calendario'];
          $this->id_user=$dados['id_user'];
          $cst = $this->con->conectar()->prepare("INSERT INTO `tb_bomba` (`bomba1`, `bomba2`, `bomba3`, `bomba4`, `bomba5`, `bomba7`, `bomba8`, `type_bomba`, `date_bomba`, `now_date`, `id_user`) VALUES (:bomba1, :bomba2, :bomba3, :bomba4, :bomba5, :bomba6, :bomba7, 2, :date, NOW(), :id_user);");
          $cst->bindParam(":bomba1", $this->Bomba1, PDO::PARAM_STR);
          $cst->bindParam(":bomba2", $this->Bomba2, PDO::PARAM_STR);
          $cst->bindParam(":bomba3", $this->Bomba3, PDO::PARAM_STR);
          $cst->bindParam(":bomba4", $this->Bomba4, PDO::PARAM_STR);
          $cst->bindParam(":bomba5", $this->Bomba5, PDO::PARAM_STR);
          $cst->bindParam(":bomba6", $this->Bomba6, PDO::PARAM_STR);
          $cst->bindParam(":bomba7", $this->Bomba7, PDO::PARAM_STR);
          $cst->bindParam(":date", $this->Date, PDO::PARAM_STR);
          $cst->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
          if($cst->execute()){
              return 'ok';
          }else{
              return 'erro';
          }
      } catch (PDOException $ex) {
          return 'error '.$ex->getMessage();
      }
    }
    public function queryRequisicao($dados){
        try{
            $this->Requisicao=$dados['Requisicao'];
            $this->id_user=$dados['id_user'];
            $this->DocGSG=$dados['DocApp'];
            $this->Quantidade=$dados['Quantidade'];
            $this->Produto=$dados['CodBarra'];
            $this->Finalizado=$dados['Finalizado'];
            $SQL_RESULTADO = $this->con->conectar()->prepare("SELECT * FROM `tb_almox` WHERE requisicao = :Requis AND user != :Usuar");
            $SQL_RESULTADO->bindParam(":Requis", $this->Requisicao, PDO::PARAM_STR);
            $SQL_RESULTADO->bindParam(":Usuar",$this->id_user,PDO::PARAM_STR);
            $SQL_RESULTADO->execute();
            $QUERY_RESULTADO = $SQL_RESULTADO->fetch(PDO::FETCH_ASSOC);
            if($QUERY_RESULTADO == 0){
                //$this->Bomba1_CONSULTA = $QUERY_RESULTADO['bomba1'];
                //$result->bindParam(":bomba1_Result", $this->Bomba1_CONSULTA, PDO::PARAM_STR);
                $QUERY_CONSULTA = $this->con->conectar()->prepare("SELECT * FROM `tb_almox` WHERE doc_gsg = :ConsultadeDOC");
                $this->ConsultaDoc = $QUERY_RESULTADO['doc_gsg'];
                $QUERY_CONSULTA->bindParam(":ConsultadeDOC", $this->ConsultaDoc, PDO::PARAM_STR);
                $QUERY_CONSULTA->execute();
                $CONSULTAQUERY = $QUERY_CONSULTA->fetch(PDO::FETCH_ASSOC);
                if($CONSULTAQUERY == 0){
                    $cst = $this->con->conectar()->prepare("INSERT INTO `tb_almox` (`ID`, `requisicao`, `quantidade`, `produto`, `finalizado`, `user`, `doc_sap`, `doc_gsg`) VALUES (NULL, :Requis, :Quantid, :Produt, :Finaliz, :Usuar, NULL, :GSGDoc);");
                    $cst->bindParam(":Requis", $this->Requisicao, PDO::PARAM_STR);
                    $cst->bindParam(":Usuar",$this->id_user,PDO::PARAM_STR);
                    $cst->bindParam(":GSGDoc",$this->DocGSG,PDO::PARAM_STR);
                    $cst->bindParam(":Quantid",$this->Quantidade,PDO::PARAM_STR);
                    $cst->bindParam(":Produt",$this->Produto,PDO::PARAM_STR);
                    $cst->bindParam(":Finaliz",$this->Finalizado,PDO::PARAM_STR);
                    if($dados['Finalizado']==1){
                        $cod = $this->con->conectar()->prepare("UPDATE `tb_almox` SET `finalizado` = '1' WHERE `tb_almox`.`requisicao` = :Requis;");
                        $cod->bindParam(":Requis", $this->Requisicao, PDO::PARAM_STR);
                        $cod->execute();
                    }
                    if($cst->execute()){
                        return 'ok';
                    }else{
                        return 'erro';
                    }
                }else{
                    return 'erro';
                }
            }elseif($QUERY_RESULTADO > 0){
                return 'outro';
            }else{
                return 'erro';
            }
        }catch(PDOException $ex){
            return 'error '.$ex->getMessage();
        }
    }
    public function queryCupom($dados){
        try{
            //Faz a Consulta no Banco de Dados e Insere o ultimo lançamento
            $this->veiculo = $dados['Veiculo'];
            $SQL_RESULTADOFUN = $this->con->conectar()->prepare("SELECT * FROM `tb_funcionario` WHERE cod_veiculo = :veicuo");
            $SQL_RESULTADOFUN->bindParam(":veicuo", $this->veiculo, PDO::PARAM_STR);
            $SQL_RESULTADOFUN->execute();
            $QUERY_RESULTADOFUN = $SQL_RESULTADOFUN->fetch(PDO::FETCH_ASSOC);

            $SQL_RESULTADOPR = $this->con->conectar()->prepare("SELECT * FROM `tb_proprio` WHERE cod_veiculo = :veicuo");
            $SQL_RESULTADOPR->bindParam(":veicuo", $this->veiculo, PDO::PARAM_STR);
            $SQL_RESULTADOPR->execute();
            $QUERY_RESULTADOPR = $SQL_RESULTADOPR->fetch(PDO::FETCH_ASSOC);

            $SQL_RESULTADOFOR = $this->con->conectar()->prepare("SELECT * FROM `tb_fornecedor` WHERE cod_veiculo = :veicuo");
            $SQL_RESULTADOFOR->bindParam(":veicuo", $this->veiculo, PDO::PARAM_STR);
            $SQL_RESULTADOFOR->execute();
            $QUERY_RESULTADOFOR = $SQL_RESULTADOFOR->fetch(PDO::FETCH_ASSOC);

            if($QUERY_RESULTADOFUN > 0){
                $this->PDOCupom = $dados['Cupom'];
                $this->PDOVeiculo = $dados['Veiculo'];
                $this->PDOQuilometragem = $dados['Quilometragem'];
                $this->PDOBomba = $dados['Bomba'];
                $this->PDOServico = $dados['Servico'];
                $this->PDOLitros = $dados['Litros'];
                $this->PDOValor = $dados['Valor'];
                $this->PDOselectCombust = $dados['selectCombust'];
                $this->PDOcalendario = $dados['calendario'];
                $this->PDOSafra = $dados['SelectSafra'];
                $this->PDOHora = $dados['Hora'];
                $this->PDOidUser = $dados['User'];
                $cstFunc = $this->con->conectar()->prepare("INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`, `servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`) VALUES (:SQLCupom, :SQLQuilometragem, :SQLcalendario, :SQLHora, :SQLBomba, :SQLServico, :SQLselectCombust, :SQLLitros, :SQLValor, :SQLselectCombust, NULL, :SQLVeiculo, NULL, :SQLUser, NOW(), NOW(), :SQLSafra, NOW(), '1');");
                $cstFunc->bindParam(":SQLCupom", $this->PDOCupom, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLVeiculo", $this->PDOVeiculo, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLQuilometragem", $this->PDOQuilometragem, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLBomba", $this->PDOBomba, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLServico", $this->PDOServico, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLLitros", $this->PDOLitros, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLValor", $this->PDOValor, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLselectCombust", $this->PDOselectCombust, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLcalendario", $this->PDOcalendario, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLSafra", $this->PDOSafra, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLHora", $this->PDOHora, PDO::PARAM_STR);
                $cstFunc->bindParam(":SQLUser", $this->PDOidUser, PDO::PARAM_STR);
                if($cstFunc->execute()){
                    return 'funcionario';
                }else{
                    return 'erro';
                }
            }elseif($QUERY_RESULTADOPR > 0){
                $this->PDOCupom = $dados['Cupom'];
                $this->PDOVeiculo = $dados['Veiculo'];
                $this->PDOQuilometragem = $dados['Quilometragem'];
                $this->PDOBomba = $dados['Bomba'];
                $this->PDOServico = $dados['Servico'];
                $this->PDOLitros = $dados['Litros'];
                $this->PDOValor = $dados['Valor'];
                $this->PDOselectCombust = $dados['selectCombust'];
                $this->PDOcalendario = $dados['calendario'];
                $this->PDOSafra = $dados['SelectSafra'];
                $this->PDOHora = $dados['Hora'];
                $this->PDOidUser = $dados['User'];
                $cstProp = $this->con->conectar()->prepare("INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`, `servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`) VALUES (:SQLCupom, :SQLQuilometragem, :SQLcalendario, :SQLHora, :SQLBomba, :SQLServico, :SQLselectCombust, :SQLLitros, :SQLValor, :SQLselectCombust, :SQLVeiculo, NULL, NULL, :SQLUser, NOW(), NOW(), :SQLSafra, NOW(), '1');");
                $cstProp->bindParam(":SQLCupom", $this->PDOCupom, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLVeiculo", $this->PDOVeiculo, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLQuilometragem", $this->PDOQuilometragem, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLBomba", $this->PDOBomba, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLServico", $this->PDOServico, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLLitros", $this->PDOLitros, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLValor", $this->PDOValor, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLselectCombust", $this->PDOselectCombust, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLcalendario", $this->PDOcalendario, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLSafra", $this->PDOSafra, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLHora", $this->PDOHora, PDO::PARAM_STR);
                $cstProp->bindParam(":SQLUser", $this->PDOidUser, PDO::PARAM_STR);
                    if($cstProp->execute()){
                        return 'erro';
                    }else{
                        return 'proprio';
                    }
                }elseif($QUERY_RESULTADOFOR > 0){
                    $this->PDOCupom = $dados['Cupom'];
                    $this->PDOVeiculo = $dados['Veiculo'];
                    $this->PDOQuilometragem = $dados['Quilometragem'];
                    $this->PDOBomba = $dados['Bomba'];
                    $this->PDOServico = $dados['Servico'];
                    $this->PDOLitros = $dados['Litros'];
                    $this->PDOValor = $dados['Valor'];
                    $this->PDOselectCombust = $dados['selectCombust'];
                    $this->PDOcalendario = $dados['calendario'];
                    $this->PDOSafra = $dados['SelectSafra'];
                    $this->PDOHora = $dados['Hora'];
                    $this->PDOidUser = $dados['User'];
                    $cstProp = $this->con->conectar()->prepare("INSERT INTO `tb_import` (`id_cupom`, `km`, `date`, `time`, `bomba`, `servico`, `cod_produto`, `litros`, `valor`, `id_preco`, `proprio_cod_veiculo`, `funcionario_cod_veiculo`, `fornecedor_cod_veiculo`, `id_user`, `date_now`, `date_hour`, `date_year`, `date_now_current`, `status_cupom`) VALUES (:SQLCupom, :SQLQuilometragem, :SQLcalendario, :SQLHora, :SQLBomba, :SQLServico, :SQLselectCombust, :SQLLitros, :SQLValor, :SQLselectCombust, NULL, NULL, :SQLVeiculo, :SQLUser, NOW(), NOW(), :SQLSafra, NOW(), '1');");
                    $cstProp->bindParam(":SQLCupom", $this->PDOCupom, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLVeiculo", $this->PDOVeiculo, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLQuilometragem", $this->PDOQuilometragem, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLBomba", $this->PDOBomba, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLServico", $this->PDOServico, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLLitros", $this->PDOLitros, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLValor", $this->PDOValor, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLselectCombust", $this->PDOselectCombust, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLcalendario", $this->PDOcalendario, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLSafra", $this->PDOSafra, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLHora", $this->PDOHora, PDO::PARAM_STR);
                    $cstProp->bindParam(":SQLUser", $this->PDOidUser, PDO::PARAM_STR);
                    if($cstProp->execute()){
                        return 'erro';
                    }else{
                        return 'fornecedor';
                    }
                }else {
                    return 'erro';
                }
            } catch (PDOException $ex) {
                return 'error '.$ex->getMessage();
            }
        }
      public function queryCadastroGeral($dados){
          try{
  
              if($dados['Veiculo'] > 4999 && $dados['Veiculo'] < 69999 ){
                  $this->PDONome = $dados['Nome'];
                  $this->PDOMatricula = $dados['Matricula'];
                  $this->PDOVeiculo = $dados['Veiculo'];
                  $this->PDOPlaca = $dados['Placa'];
                  $this->PDOidUser = $dados['id_user'];
                  $cstFunc = $this->con->conectar()->prepare("INSERT INTO `tb_funcionario` (`cod_veiculo`, `nome_funcionario`, `placa_veiculo`, `func_matricula`, `sistemagsg`, `centro_custo`, `id_cupom`, `id_user`) VALUES (:SQLVeiculo, :SQLNome, :SQLPlaca, :SQLMatricula, '80999', 'SG01010123', '3', :SQLIDUser);");
                  $cstFunc->bindParam(":SQLNome", $this->PDONome, PDO::PARAM_STR);
                  $cstFunc->bindParam(":SQLMatricula", $this->PDOMatricula, PDO::PARAM_STR);
                  $cstFunc->bindParam(":SQLVeiculo", $this->PDOVeiculo, PDO::PARAM_STR);
                  $cstFunc->bindParam(":SQLPlaca", $this->PDOPlaca, PDO::PARAM_STR);
                  $cstFunc->bindParam(":SQLIDUser", $this->PDOidUser, PDO::PARAM_STR);
                  if($cstFunc->execute()){
                      return 'funcionario';
                  }else{
                    return 'erro';
                  }
                }elseif ($dados['Veiculo'] > 70000 && $dados['Veiculo'] < 80000 ) {
                  $this->PDONome = $dados['Nome'];
                  $this->PDOCodigo = $dados['Matricula'];
                  $this->PDOVeiculo = $dados['Veiculo'];
                  $this->PDOPlaca = $dados['Placa'];
                  $this->PDOFazenda = $dados['Fazenda'];
                  $this->PDOContrato = $dados['Contrato'];
                  $this->PDOidUser = $dados['id_user'];
                  $cstForn = $this->con->conectar()->prepare("INSERT INTO `tb_fornecedor` (`cod_veiculo`, `nome_fornecedor`, `placa_veiculo`, `cod_fornecedor`, `contrato_fornecedor`,`nome_fazenda`, `centro_custo`, `id_cupom`, `id_user`) VALUES (:SQLVeiculo, :SQLNome, :SQLPlaca, :SQLCodigo, :SQLContrato, :SQLFazenda, '48', '2', :SQLIDUser);");
                  $cstForn->bindParam(":SQLNome", $this->PDONome, PDO::PARAM_STR);
                  $cstForn->bindParam(":SQLCodigo", $this->PDOCodigo, PDO::PARAM_STR);
                  $cstForn->bindParam(":SQLVeiculo", $this->PDOVeiculo, PDO::PARAM_STR);
                  $cstForn->bindParam(":SQLPlaca", $this->PDOPlaca, PDO::PARAM_STR);
                  $cstForn->bindParam(":SQLFazenda", $this->PDOFazenda, PDO::PARAM_STR);
                  $cstForn->bindParam(":SQLContrato", $this->PDOContrato, PDO::PARAM_STR);
                  $cstForn->bindParam(":SQLIDUser", $this->PDOidUser, PDO::PARAM_STR);
                  if($cstForn->execute()){
                      return 'erro';
                  }else{
                    return 'fornecedor';
                  }
                }elseif ($dados['Veiculo'] > 99999 ) {
                  $this->PDONome = $dados['Nome'];
                  $this->PDOVeiculo = $dados['Veiculo'];
                  $this->PDOPlaca = $dados['Placa'];
                  $this->PDOidUser = $dados['id_user'];
                  $cstProp = $this->con->conectar()->prepare("INSERT INTO `tb_proprio` (`cod_veiculo`, `desc_veiculo`, `placa_veiculo`, `centro_custo`, `id_cupom`, `id_user`) VALUES (:SQLVeiculo, :SQLNome, :SQLPlaca, NULL, '1', :SQLIDUser);");
                  $cstProp->bindParam(":SQLNome", $this->PDONome, PDO::PARAM_STR);
                  $cstProp->bindParam(":SQLVeiculo", $this->PDOVeiculo, PDO::PARAM_STR);
                  $cstProp->bindParam(":SQLPlaca", $this->PDOPlaca, PDO::PARAM_STR);
                  $cstProp->bindParam(":SQLIDUser", $this->PDOidUser, PDO::PARAM_STR);
                  if ($cstProp->execute()) {
                    return 'erro';
                  }else{
                    return 'proprio';
                  }
                }else{
                  return 'erro';
                }
              }catch (PDOException $ex){
                return 'error '.$ex->getMessage();
              }
            }
    public function queryTanque($dados){
      try{
          $this->Tanque1 = $dados['tanque1'];
          $this->Tanque2 = $dados['tanque2'];
          $this->Tanque3 = $dados['tanque3'];
          $this->Tanque4 = $dados['tanque4'];
          $this->Tanque5 = $dados['tanque5'];
          $this->Tanque6 = $dados['tanque6'];       
          $this->Date = $dados['calendario'];
          $this->id_user=$dados['id_user'];
          $cst = $this->con->conectar()->prepare("INSERT INTO `tb_tanque` (`id_tanque`,`tanque1`, `tanque2`, `tanque3`, `tanque4`, `tanque5`, `tanque6`, `date`, `now_date`, `id_user`) VALUES (NULL,:tanque1, :tanque2, :tanque3, :tanque4, :tanque5, :tanque6, :date, NOW(), :id_user);");
          $cst->bindParam(":tanque1", $this->Tanque1, PDO::PARAM_STR);
          $cst->bindParam(":tanque2", $this->Tanque2, PDO::PARAM_STR);
          $cst->bindParam(":tanque3", $this->Tanque3, PDO::PARAM_STR);
          $cst->bindParam(":tanque4", $this->Tanque4, PDO::PARAM_STR);
          $cst->bindParam(":tanque5", $this->Tanque5, PDO::PARAM_STR);
          $cst->bindParam(":tanque6", $this->Tanque6, PDO::PARAM_STR);
          $cst->bindParam(":date", $this->Date, PDO::PARAM_STR);
          $cst->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
          if($cst->execute()){
              return 'ok';
          }else{
              return 'erro';
          }
      } catch (PDOException $ex) {
          return 'error '.$ex->getMessage();
      }
        $this->id_user=$dados['id_user'];
        $this->Date = $dados['calendario'];
        $tarefa = $this->con->conectar()->prepare("INSERT INTO `tb_tarefas` (`id_tarefa`, `titulo`, `marqCheck`, `data`, `date_now`, `hora`, `id_user`) VALUES (NULL, 'Tanque Fisico Inserido', 'checked', :date, NOW(), NOW(), :id_user)");
        $tarefa->bindParam(":date", $this->Date, PDO::PARAM_STR);
        $tarefa->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
        if($tarefa->execute()){
            return 'ok';
        }else{
            return 'erro';
        }
    }

    public function queryInsertMatricula_func($dados){
      try{
          $this->nome = $dados['nome'];
          $this->veiculo = $dados['veiculo'];
          $this->placa_veiculo = $dados['placa_veiculo'];
          $this->matricula = $dados['matricula'];
          $this->sistemagsg = $dados['cod_novo'];
          $this->custo = $dados['custo'];
          $this->cod_identificacao = $dados['cod_identificacao'];
          $this->id_user=$dados['id_user'];
          $cst = $this->con->conectar()->prepare("INSERT INTO `tb_funcionario` (`cod_veiculo`, `nome_funcionario`, `placa_veiculo`, `func_matricula`, `sistemagsg`, `centro_custo`, `id_cupom`, `id_user`) VALUES (:veiculo, :nome, :placa_veiculo, :matricula, :sistemagsg, :custo, :cod_identificacao, :id_user);");
          $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
          $cst->bindParam(":veiculo", $this->veiculo, PDO::PARAM_STR);
          $cst->bindParam(":placa_veiculo", $this->placa_veiculo, PDO::PARAM_STR);
          $cst->bindParam(":matricula", $this->matricula, PDO::PARAM_STR);
          $cst->bindParam(":sistemagsg", $this->sistemagsg, PDO::PARAM_STR);
          $cst->bindParam(":custo", $this->custo, PDO::PARAM_STR);
          $cst->bindParam(":cod_identificacao", $this->cod_identificacao, PDO::PARAM_STR);
          $cst->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
          if($cst->execute()){
              return 'ok';
          }else{
              return 'erro';
          }
      } catch (PDOException $ex) {
          return 'error '.$ex->getMessage();
      }
    }

    public function queryInsertMatricula_forn($dados){
      try{
          $this->nome = $dados['nome'];
          $this->veiculo = $dados['veiculo'];
          $this->placa_veiculo = $dados['placa_veiculo'];
          $this->cod_fornecedor = $dados['matricula'];
          $this->custo = $dados['custo'];
          $this->fazenda = $dados['fazenda'];
          $this->contrato = $dados['contrato'];
          $this->cod_identificacao = $dados['cod_identificacao'];
          $this->id_user=$dados['id_user'];
          $cst = $this->con->conectar()->prepare("INSERT INTO `tb_fornecedor` (`cod_veiculo`, `nome_fornecedor`, `placa_veiculo`, `cod_fornecedor`, `contrato_fornecedor`, `nome_fazenda`, `centro_custo`, `id_cupom`, `id_user`) VALUES (:veiculo, :nome, :placa_veiculo, :cod_fornecedor, :contrato, :fazenda, :custo, :cod_identificacao, :id_user);");
          $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
          $cst->bindParam(":veiculo", $this->veiculo, PDO::PARAM_STR);
          $cst->bindParam(":placa_veiculo", $this->placa_veiculo, PDO::PARAM_STR);
          $cst->bindParam(":cod_fornecedor", $this->cod_fornecedor, PDO::PARAM_STR);
          $cst->bindParam(":fazenda", $this->fazenda, PDO::PARAM_STR);
          $cst->bindParam(":contrato", $this->contrato, PDO::PARAM_STR);
          $cst->bindParam(":custo", $this->custo, PDO::PARAM_STR);
          $cst->bindParam(":cod_identificacao", $this->cod_identificacao, PDO::PARAM_STR);
          $cst->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
          if($cst->execute()){
              return 'ok';
          }else{
              return 'erro';
          }
      } catch (PDOException $ex) {
          return 'error '.$ex->getMessage();
      }
    }

    public function queryInsertMatricula_pro($dados){
      try{
          $this->nome = $dados['nome'];
          $this->veiculo = $dados['veiculo'];
          $this->placa_veiculo = $dados['placa_veiculo'];
          $this->custo = $dados['custo'];
          $this->cod_identificacao = $dados['cod_identificacao'];
          $this->id_user=$dados['id_user'];
          $cst = $this->con->conectar()->prepare("INSERT INTO `tb_proprio` (`cod_veiculo`, `desc_veiculo`, `placa_veiculo`, `centro_custo`, `id_cupom`, `id_user`) VALUES (:veiculo, :nome, :placa_veiculo, :custo, :cod_identificacao, :id_user);");
          $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
          $cst->bindParam(":veiculo", $this->veiculo, PDO::PARAM_STR);
          $cst->bindParam(":placa_veiculo", $this->placa_veiculo, PDO::PARAM_STR);
          $cst->bindParam(":custo", $this->custo, PDO::PARAM_STR);
          $cst->bindParam(":cod_identificacao", $this->cod_identificacao, PDO::PARAM_STR);
          $cst->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
          if($cst->execute()){
              return 'ok';
          }else{
              return 'erro';
          }
      } catch (PDOException $ex) {
          return 'error '.$ex->getMessage();
      }
    }

    public function queryInsertMovimentos($dados){
      try{
        $this->PDOData = $dados['calendario'];
        $SQL_RESULTADODT = $this->con->conectar()->prepare("SELECT * FROM `tb_movimentos` WHERE date = :DataVerifica");
        $SQL_RESULTADODT->bindParam(":DataVerifica", $this->PDOData, PDO::PARAM_STR);
        $SQL_RESULTADODT->execute();
        $QUERY_RESULTADODT = $SQL_RESULTADODT->fetch(PDO::FETCH_ASSOC);

        if($QUERY_RESULTADODT > 0){
            $this->entrada = $dados['entrada'];
            $this->SelectCombust = $dados['selectCombust'];
            $this->Date = $dados['calendario'];
            $this->PDONotaFiscal = $dados['NotaFiscal'];
            $this->PDOChaveAcesso = $dados['ChaveAcesso'];
            $this->DateAno = date('y', strtotime($dados['calendario']));
            $this->DateMes = date('m', strtotime($dados['calendario']));
            $cstNF = $this->con->conectar()->prepare("INSERT INTO `tb_notafiscal` (`notafiscal`, `qtd`, `cod_produto`, `data`, `chaveacesso`, `timestamp`) VALUES (:NotaFiscal, :entrada, :selectCombust, :Date, '27' :DateAno :DateMes '3427423302314555000000' :NotaFiscal '1' :ChaveAcesso, NOW());");
            $cstNF->bindParam(":NotaFiscal", $this->PDONotaFiscal, PDO::PARAM_STR);
            $cstNF->bindParam(":entrada", $this->entrada, PDO::PARAM_STR);
            $cstNF->bindParam(":selectCombust", $this->SelectCombust, PDO::PARAM_STR);
            $cstNF->bindParam(":Date", $this->Date, PDO::PARAM_STR);
            $cstNF->bindParam(":DateAno", $this->DateAno, PDO::PARAM_STR);
            $cstNF->bindParam(":DateMes", $this->DateMes, PDO::PARAM_STR);
            $cstNF->bindParam(":ChaveAcesso", $this->PDOChaveAcesso, PDO::PARAM_STR);
           if ($cstNF->execute()) {
             return 'ok';
           }else{
            return 'erro';
           }
        }else{
            $this->DateDia = date('d', strtotime($dados['calendario']));
            $this->afericao = $dados['afericao'];
            $this->entrada = $dados['entrada'];
            $this->manute = $dados['manute'];
            $this->manuts = $dados['manuts'];
            $this->Date = $dados['calendario'];
            $this->SelectCombust = $dados['selectCombust'];
            $this->id_user=$dados['id_user'];
            $cst = $this->con->conectar()->prepare("INSERT INTO `tb_movimentos` (`id_movimentos`, `afericao`, `entrada`, `manutencao`, `manutencao_saida`, `abast_proprio`, `fornec_cana`, `funcionarios`, `usina`, `terceiros`, `comboio`, `saldo_atual`, `saldo_inicial`, `cod_produto`, `date`, `dia`, `now_date`, `id_user`) VALUES (NULL, :afericao, :entrada, :manute, :manutes, 0, 0, 0, 0, 0, 0, 0, 0, :selectCombust, :Date, :DateDia, NOW(), :id_user);");
            $cst->bindParam(":DateDia", $this->DateDia, PDO::PARAM_STR);
            $cst->bindParam(":afericao", $this->afericao, PDO::PARAM_STR);
            $cst->bindParam(":entrada", $this->entrada, PDO::PARAM_STR);
            $cst->bindParam(":manute", $this->manute, PDO::PARAM_STR);
            $cst->bindParam(":manutes", $this->manuts, PDO::PARAM_STR);
            $cst->bindParam(":selectCombust", $this->SelectCombust, PDO::PARAM_STR);        
            $cst->bindParam(":Date", $this->Date, PDO::PARAM_STR);
            $cst->bindParam(":id_user",$this->id_user,PDO::PARAM_STR);
            if($cst->execute()){
                $this->PDONotaFiscal = $dados['NotaFiscal'];
                $this->PDOChaveAcesso = $dados['ChaveAcesso'];
                $this->DateAno = date('y', strtotime($dados['calendario']));
                $this->DateMes = date('m', strtotime($dados['calendario']));
                $cstNF = $this->con->conectar()->prepare("INSERT INTO `tb_notafiscal` (`notafiscal`, `qtd`, `cod_produto`, `data`, `chaveacesso`, `timestamp`) VALUES (:NotaFiscal, :entrada, :selectCombust, :Date, '27' :DateAno :DateMes '3427423302314555000000' :NotaFiscal '1' :ChaveAcesso, NOW());");
                $cstNF->bindParam(":NotaFiscal", $this->PDONotaFiscal, PDO::PARAM_STR);
                $cstNF->bindParam(":entrada", $this->entrada, PDO::PARAM_STR);
                $cstNF->bindParam(":selectCombust", $this->SelectCombust, PDO::PARAM_STR);
                $cstNF->bindParam(":Date", $this->Date, PDO::PARAM_STR);
                $cstNF->bindParam(":DateAno", $this->DateAno, PDO::PARAM_STR);
                $cstNF->bindParam(":DateMes", $this->DateMes, PDO::PARAM_STR);
                $cstNF->bindParam(":ChaveAcesso", $this->PDOChaveAcesso, PDO::PARAM_STR);
               if ($cstNF->execute()) {
                 return 'ok';
               }else{
                return 'erro';
               }
            }else{
                return 'erro';
            }
        }
      } catch (PDOException $ex) {
          return 'error '.$ex->getMessage();
      }
    }

    public function queryUpdateBombas($dados){
        try{
            $this->bmb1 = $dados['Bomba1'];
            $this->bmb2 = $dados['Bomba2'];
            $this->bmb3 = $dados['Bomba3'];
            $this->bmb4 = $dados['Bomba4'];
            $this->bmb5 = $dados['Bomba5'];
            $this->bmb7 = $dados['Bomba7'];
            $this->bmb8 = $dados['Bomba8'];
            $this->IdBomba = $dados['id'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_bomba` SET bomba1 = :bmb1, bomba2 = :bmb2, bomba3 = :bmb3, bomba4 = :bmb4, bomba5 = :bmb5, bomba7 = :bmb7, bomba8 = :bmb8 WHERE id_bomba = :IdBomba");
            $cst->bindParam(":bmb1", $this->bmb1, PDO::PARAM_STR);
            $cst->bindParam(":bmb2", $this->bmb2, PDO::PARAM_STR);
            $cst->bindParam(":bmb3", $this->bmb3, PDO::PARAM_STR);
            $cst->bindParam(":bmb4", $this->bmb4, PDO::PARAM_STR);
            $cst->bindParam(":bmb5", $this->bmb5, PDO::PARAM_STR);
            $cst->bindParam(":bmb7", $this->bmb7, PDO::PARAM_STR);
            $cst->bindParam(":bmb8", $this->bmb8, PDO::PARAM_STR);
            $cst->bindParam(":IdBomba", $this->IdBomba, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryUpdateCadastro($dados){
        try{
            $this->PDONome = $dados['NomeFuncionario'];
            $this->PDOPlaca = $dados['PlacaVeiculo'];
            $this->PDOMatricula = $dados['FunciMatricula'];
            $this->PDOSistemagsg = $dados['SistemaGSG'];
            $this->PDOCusto = $dados['CentroCusto'];
            $this->PDOCupom = $dados['CupomIndet'];
            $this->PDOIdUser = $dados['id_user'];
            $this->PDOVeiculoCod = $dados['id'];
            $this->PDOcOLsTATUS = $dados['colStatus'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_funcionario` SET nome_funcionario = :SQLNome, placa_veiculo = :SQLPlaca, func_matricula = :SQLMatricula, col_status=:SqlStatus,sistemagsg = :SQLSistemaGSG, centro_custo = :SQLCusto, id_cupom = :SQLCupom, id_user = :SQLIDUser WHERE cod_veiculo = :SQLVeiculoCod");
            $cst->bindParam(":SQLNome", $this->PDONome, PDO::PARAM_STR);
            $cst->bindParam(":SQLPlaca", $this->PDOPlaca, PDO::PARAM_STR);
            $cst->bindParam(":SQLMatricula", $this->PDOMatricula, PDO::PARAM_STR);
            $cst->bindParam(":SQLSistemaGSG", $this->PDOSistemagsg, PDO::PARAM_STR);
            $cst->bindParam(":SQLCusto", $this->PDOCusto, PDO::PARAM_STR);
            $cst->bindParam(":SQLCupom", $this->PDOCupom, PDO::PARAM_STR);
            $cst->bindParam(":SQLIDUser", $this->PDOIdUser, PDO::PARAM_STR);
            $cst->bindParam(":SqlStatus", $this->PDOcOLsTATUS, PDO::PARAM_STR);
            $cst->bindParam(":SQLVeiculoCod", $this->PDOVeiculoCod, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryUpdateCadastroUser($dados){
        try{
            $this->PDOUserName = $dados['UserName'];
            $this->PDOLoginUser = $dados['LoginUser'];
            $this->PDOMatricula = $dados['MatriculaUser'];
            $this->PDOStatus = $dados['StatusUser'];
            $this->PDOTipoUser = $dados['TipoUser'];
            $this->PDOUserID = $dados['id'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_user` SET nome_user = :SQLNome, login_user = :SQLLoginUser, regist_user = :SQLMatricula, status_user = :SQLStatus, type_user = :SQLTipoUser WHERE id_user = :SQLUserID");
            $cst->bindParam(":SQLNome", $this->PDOUserName, PDO::PARAM_STR);
            $cst->bindParam(":SQLLoginUser", $this->PDOLoginUser, PDO::PARAM_STR);
            $cst->bindParam(":SQLMatricula", $this->PDOMatricula, PDO::PARAM_STR);
            $cst->bindParam(":SQLStatus", $this->PDOStatus, PDO::PARAM_STR);
            $cst->bindParam(":SQLTipoUser", $this->PDOTipoUser, PDO::PARAM_STR);
            $cst->bindParam(":SQLUserID", $this->PDOUserID, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryUpdateCadastroFornecedor($dados){
        try{
            $this->PDONome = $dados['NomeFornecedor'];
            $this->PDOPlaca = $dados['PlacaVeiculo'];
            $this->PDOCodigo = $dados['Codigo'];
            $this->PDOContrato = $dados['Contrato'];
            $this->PDOCusto = $dados['CentroCusto'];
            $this->PDOCupom = $dados['CupomIndet'];
            $this->PDOFazenda = $dados['Fazenda'];
            $this->PDOIdUser = $dados['id_user'];
            $this->PDOVeiculoCod = $dados['id'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_fornecedor` SET nome_fornecedor = :SQLNome, placa_veiculo = :SQLPlaca, cod_fornecedor = :SQLCodigo, contrato_fornecedor = :SQLContrato, nome_fazenda = :SQLFazenda, centro_custo = :SQLCusto, id_cupom = :SQLCupom, id_user = :SQLIDUser WHERE cod_veiculo = :SQLVeiculoCod");
            $cst->bindParam(":SQLNome", $this->PDONome, PDO::PARAM_STR);
            $cst->bindParam(":SQLPlaca", $this->PDOPlaca, PDO::PARAM_STR);
            $cst->bindParam(":SQLCodigo", $this->PDOCodigo, PDO::PARAM_STR);
            $cst->bindParam(":SQLContrato", $this->PDOContrato, PDO::PARAM_STR);
            $cst->bindParam(":SQLFazenda", $this->PDOFazenda, PDO::PARAM_STR);
            $cst->bindParam(":SQLCusto", $this->PDOCusto, PDO::PARAM_STR);
            $cst->bindParam(":SQLCupom", $this->PDOCupom, PDO::PARAM_STR);
            $cst->bindParam(":SQLIDUser", $this->PDOIdUser, PDO::PARAM_STR);
            $cst->bindParam(":SQLVeiculoCod", $this->PDOVeiculoCod, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryUpdateCadastroUsina($dados){
        try{
            $this->PDOVeiculo = $dados['Veiculo'];
            $this->PDOPlaca = $dados['PlacaVeiculo'];
            $this->PDOCusto = $dados['CentroCusto'];
            $this->PDOCupom = $dados['CupomIndet'];
            $this->PDOIdUser = $dados['id_user'];
            $this->PDOVeiculoCod = $dados['id'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_proprio` SET desc_veiculo = :SQLNome, placa_veiculo = :SQLPlaca, centro_custo = :SQLCusto, id_cupom = :SQLCupom, id_user = :SQLIDUser WHERE cod_veiculo = :SQLVeiculoCod");
            $cst->bindParam(":SQLNome", $this->PDOVeiculo, PDO::PARAM_STR);
            $cst->bindParam(":SQLPlaca", $this->PDOPlaca, PDO::PARAM_STR);
            $cst->bindParam(":SQLCusto", $this->PDOCusto, PDO::PARAM_STR);
            $cst->bindParam(":SQLCupom", $this->PDOCupom, PDO::PARAM_STR);
            $cst->bindParam(":SQLIDUser", $this->PDOIdUser, PDO::PARAM_STR);
            $cst->bindParam(":SQLVeiculoCod", $this->PDOVeiculoCod, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
    public function queryUpdateCupom($dados){
        try{
            try{
                //Faz a Consulta no Banco de Dados
                $this->veiculoFun = $dados['Funcionario'];
                $SQL_RESULTADOFUN = $this->con->conectar()->prepare("SELECT * FROM `tb_funcionario` WHERE cod_veiculo = :veicuo");
                $SQL_RESULTADOFUN->bindParam(":veicuo", $this->veiculoFun, PDO::PARAM_STR);
                $SQL_RESULTADOFUN->execute();
                $QUERY_RESULTADOFUN = $SQL_RESULTADOFUN->fetch(PDO::FETCH_ASSOC);

                $this->veiculoPro = $dados['Proprio'];
                $SQL_RESULTADOPR = $this->con->conectar()->prepare("SELECT * FROM `tb_proprio` WHERE cod_veiculo = :veicuo");
                $SQL_RESULTADOPR->bindParam(":veicuo", $this->veiculoPro, PDO::PARAM_STR);
                $SQL_RESULTADOPR->execute();
                $QUERY_RESULTADOPR = $SQL_RESULTADOPR->fetch(PDO::FETCH_ASSOC);

                $this->veiculoFor = $dados['Fornecedor'];
                $SQL_RESULTADOfor = $this->con->conectar()->prepare("SELECT * FROM `tb_fornecedor` WHERE cod_veiculo = :veicuo");
                $SQL_RESULTADOfor->bindParam(":veicuo", $this->veiculoFor, PDO::PARAM_STR);
                $SQL_RESULTADOfor->execute();
                $QUERY_RESULTADOFOR = $SQL_RESULTADOfor->fetch(PDO::FETCH_ASSOC);
    
                    if($QUERY_RESULTADOFUN > 0){
                        $this->cpmTexto = $dados['TextoMotiv'];
                        $this->cpmValor = $dados['Valor'];
                        $this->cpmLitros = $dados['Litros'];
                        $this->cpmProduto = $dados['Produto'];
                        $this->cpmBomba = $dados['Bomba'];
                        $this->cpmHora = $dados['Hora'];
                        $this->cpmQuilometragem = $dados['Quilometragem'];
                        $this->cpmStatus = $dados['Status'];
                        $this->veiculoFun = $dados['Funcionario'];
                        $this->cpmID = $dados['id'];
                        $cst = $this->con->conectar()->prepare("UPDATE `tb_import` SET status_cupom = :SQLStatus, km = :SQLQuilometragem, time = :SQLHora, bomba = :SQLBomba, cod_produto = :SQLProduto, litros = :SQLLitros, valor = :SQLValor, funcionario_cod_veiculo = :veicuo, motivo_alt = :SQLTextoMotiv WHERE id_cupom = :SQLid");
                        $cst->bindParam(":SQLTextoMotiv", $this->cpmTexto, PDO::PARAM_STR);
                        $cst->bindParam(":SQLValor", $this->cpmValor, PDO::PARAM_STR);
                        $cst->bindParam(":SQLLitros", $this->cpmLitros, PDO::PARAM_STR);
                        $cst->bindParam(":SQLProduto", $this->cpmProduto, PDO::PARAM_STR);
                        $cst->bindParam(":SQLBomba", $this->cpmBomba, PDO::PARAM_STR);
                        $cst->bindParam(":SQLHora", $this->cpmHora, PDO::PARAM_STR);
                        $cst->bindParam(":SQLQuilometragem", $this->cpmQuilometragem, PDO::PARAM_STR);
                        $cst->bindParam(":SQLStatus", $this->cpmStatus, PDO::PARAM_STR);
                        $cst->bindParam(":SQLid", $this->cpmID, PDO::PARAM_STR);
                        $cst->bindParam(":veicuo", $this->veiculoFun, PDO::PARAM_STR);
                        if($cst->execute()){
                            return 'ok';
                        }else{
                            return 'erro';
                        }
                    }elseif($QUERY_RESULTADOPR > 0){
                        $this->cpmTexto = $dados['TextoMotiv'];
                        $this->cpmValor = $dados['Valor'];
                        $this->cpmLitros = $dados['Litros'];
                        $this->cpmProduto = $dados['Produto'];
                        $this->cpmBomba = $dados['Bomba'];
                        $this->cpmHora = $dados['Hora'];
                        $this->cpmQuilometragem = $dados['Quilometragem'];
                        $this->veiculoPro = $dados['Proprio'];
                        $this->cpmStatus = $dados['Status'];
                        $this->cpmID = $dados['id'];
                        $cst = $this->con->conectar()->prepare("UPDATE `tb_import` SET status_cupom = :SQLStatus, km = :SQLQuilometragem, time = :SQLHora, bomba = :SQLBomba, cod_produto = :SQLProduto, litros = :SQLLitros, valor = :SQLValor, proprio_cod_veiculo = :veicuo, motivo_alt = :SQLTextoMotiv WHERE id_cupom = :SQLid");
                        $cst->bindParam(":SQLTextoMotiv", $this->cpmTexto, PDO::PARAM_STR);
                        $cst->bindParam(":SQLValor", $this->cpmValor, PDO::PARAM_STR);
                        $cst->bindParam(":SQLLitros", $this->cpmLitros, PDO::PARAM_STR);
                        $cst->bindParam(":SQLProduto", $this->cpmProduto, PDO::PARAM_STR);
                        $cst->bindParam(":SQLBomba", $this->cpmBomba, PDO::PARAM_STR);
                        $cst->bindParam(":SQLHora", $this->cpmHora, PDO::PARAM_STR);
                        $cst->bindParam(":veicuo", $this->veiculoPro, PDO::PARAM_STR);
                        $cst->bindParam(":SQLQuilometragem", $this->cpmQuilometragem, PDO::PARAM_STR);
                        $cst->bindParam(":SQLStatus", $this->cpmStatus, PDO::PARAM_STR);
                        $cst->bindParam(":SQLid", $this->cpmID, PDO::PARAM_STR);
                        if($cst->execute()){
                            return 'ok';
                        }else{
                            return 'erro';
                        }
                    }elseif($QUERY_RESULTADOFOR > 0){
                        $this->cpmTexto = $dados['TextoMotiv'];
                        $this->cpmValor = $dados['Valor'];
                        $this->cpmLitros = $dados['Litros'];
                        $this->cpmProduto = $dados['Produto'];
                        $this->cpmBomba = $dados['Bomba'];
                        $this->cpmHora = $dados['Hora'];
                        $this->veiculoFor = $dados['Fornecedor'];
                        $this->cpmQuilometragem = $dados['Quilometragem'];
                        $this->cpmStatus = $dados['Status'];
                        $this->cpmID = $dados['id'];
                        $cst = $this->con->conectar()->prepare("UPDATE `tb_import` SET status_cupom = :SQLStatus, km = :SQLQuilometragem, time = :SQLHora, bomba = :SQLBomba, cod_produto = :SQLProduto, litros = :SQLLitros, valor = :SQLValor, fornecedor_cod_veiculo = :veicuo, motivo_alt = :SQLTextoMotiv WHERE id_cupom = :SQLid");
                        $cst->bindParam(":SQLTextoMotiv", $this->cpmTexto, PDO::PARAM_STR);
                        $cst->bindParam(":SQLValor", $this->cpmValor, PDO::PARAM_STR);
                        $cst->bindParam(":SQLLitros", $this->cpmLitros, PDO::PARAM_STR);
                        $cst->bindParam(":SQLProduto", $this->cpmProduto, PDO::PARAM_STR);
                        $cst->bindParam(":SQLBomba", $this->cpmBomba, PDO::PARAM_STR);
                        $cst->bindParam(":SQLHora", $this->cpmHora, PDO::PARAM_STR);
                        $cst->bindParam(":veicuo", $this->veiculoFor, PDO::PARAM_STR);
                        $cst->bindParam(":SQLQuilometragem", $this->cpmQuilometragem, PDO::PARAM_STR);
                        $cst->bindParam(":SQLStatus", $this->cpmStatus, PDO::PARAM_STR);
                        $cst->bindParam(":SQLid", $this->cpmID, PDO::PARAM_STR);
                        if($cst->execute()){
                            return 'ok';
                        }else{
                            return 'erro';
                        }
                    }else {
                        return 'erro';
                    }
                } catch (PDOException $ex) {
                    return 'error '.$ex->getMessage();
                }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryUpdateTanques($dados){
        try{
            $this->tnq1 = $dados['Tanque1'];
            $this->tnq2 = $dados['Tanque2'];
            $this->tnq3 = $dados['Tanque3'];
            $this->tnq4 = $dados['Tanque4'];
            $this->tnq5 = $dados['Tanque5'];
            $this->tnq6 = $dados['Tanque6'];
            $this->IdTanque = $dados['id'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_tanque` SET tanque1 = :tnq1, tanque2 = :tnq2, tanque3 = :tnq3, tanque4 = :tnq4, tanque5 = :tnq5, tanque6 = :tnq6 WHERE id_tanque = :IdTanque");
            $cst->bindParam(":tnq1", $this->tnq1, PDO::PARAM_STR);
            $cst->bindParam(":tnq2", $this->tnq2, PDO::PARAM_STR);
            $cst->bindParam(":tnq3", $this->tnq3, PDO::PARAM_STR);
            $cst->bindParam(":tnq4", $this->tnq4, PDO::PARAM_STR);
            $cst->bindParam(":tnq5", $this->tnq5, PDO::PARAM_STR);
            $cst->bindParam(":tnq6", $this->tnq6, PDO::PARAM_STR);
            $cst->bindParam(":IdTanque", $this->IdTanque, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function queryUpdateMovimentos($dados){
        try{
            $this->PDOAfericao = $dados['Afericao'];
            $this->PDOEntrada = $dados['Entrada'];
            $this->PDOManuEntrada = $dados['ManuEntrada'];
            $this->PDOManuSaida = $dados['ManuSaida'];
            $this->PDOProprio = $dados['Proprio'];
            $this->PDOFornecedor = $dados['Fornecedor'];
            $this->PDOFuncionario = $dados['Funcionario'];
            $this->PDOIndustria = $dados['Industria'];
            $this->PDOTerceiros = $dados['Terceiros'];
            $this->PDOComboio = $dados['Comboio'];
            $this->PDOAtual = $dados['Atual'];
            $this->PDOInicial = $dados['Inicial'];
            $this->PDOProduto = $dados['Produto'];
            $this->PDOId = $dados['id'];
            $cst = $this->con->conectar()->prepare("UPDATE `tb_movimentos` SET afericao = :SQLAfericao, entrada = :SQLEntrada, manutencao = :SQLManuEntrada, manutencao_saida = :SQLManuSaida, abast_proprio = :SQLProprio, fornec_cana = :SQLFornecedor, funcionarios = :SQLFuncionario, usina = :SQLIndustria, terceiros =:SQLTerceiros, comboio = :SQLComboio, saldo_atual = :SQLAtual, saldo_inicial = :SQLInicial, cod_produto = :SQLProduto WHERE id_movimentos = :SQLId");
            $cst->bindParam(":SQLAfericao", $this->PDOAfericao, PDO::PARAM_STR);
            $cst->bindParam(":SQLEntrada", $this->PDOEntrada, PDO::PARAM_STR);
            $cst->bindParam(":SQLManuEntrada", $this->PDOManuEntrada, PDO::PARAM_STR);
            $cst->bindParam(":SQLManuSaida", $this->PDOManuSaida, PDO::PARAM_STR);
            $cst->bindParam(":SQLProprio", $this->PDOProprio, PDO::PARAM_STR);
            $cst->bindParam(":SQLFornecedor", $this->PDOFornecedor, PDO::PARAM_STR);
            $cst->bindParam(":SQLFuncionario", $this->PDOFuncionario, PDO::PARAM_STR);
            $cst->bindParam(":SQLIndustria", $this->PDOIndustria, PDO::PARAM_STR);
            $cst->bindParam(":SQLTerceiros", $this->PDOTerceiros, PDO::PARAM_STR);
            $cst->bindParam(":SQLComboio", $this->PDOComboio, PDO::PARAM_STR);
            $cst->bindParam(":SQLAtual", $this->PDOAtual, PDO::PARAM_STR);
            $cst->bindParam(":SQLInicial", $this->PDOInicial, PDO::PARAM_STR);
            $cst->bindParam(":SQLProduto", $this->PDOProduto, PDO::PARAM_STR);
            $cst->bindParam(":SQLId", $this->PDOId, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }

    public function querySolcRequisicao($dados){
        try{
            $this->Requisicao=$dados['Requisicao'];
            $this->id_user=$dados['id_user'];
            $this->Date = $dados['calendario'];
            $SQL_RESULTADO = $this->con->conectar()->prepare("SELECT * FROM `tb_almox_solicitacao` WHERE RESERVA = :Requis");
            $SQL_RESULTADO->bindParam(":Requis", $this->Requisicao, PDO::PARAM_STR);
            $SQL_RESULTADO->execute();
            $QUERY_RESULTADO = $SQL_RESULTADO->fetch(PDO::FETCH_ASSOC);
            if($QUERY_RESULTADO == 0){
                    $cst = $this->con->conectar()->prepare("INSERT INTO `tb_almox_solicitacao` (`ID_TB`, `RESERVA`, `DATARESERVA`, `USERSOLIC`, `FINALIZADO`) VALUES (NULL, :Requis, :date, :Usuar, 2);");
                    $cst->bindParam(":Requis", $this->Requisicao, PDO::PARAM_STR);
                    $cst->bindParam(":Usuar",$this->id_user,PDO::PARAM_STR);
                    $cst->bindParam(":date", $this->Date, PDO::PARAM_STR);
                    if($cst->execute()){
                        return 'ok';
                    }else{
                        return 'erro';
                    }
                }else{
                    return 'duplicidade';
                }
        }catch(PDOException $ex){
            return 'error '.$ex->getMessage();
        }
    }
  }
?>
