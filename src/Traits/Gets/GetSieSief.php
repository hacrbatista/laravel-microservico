<?php

namespace Gsferro\MicroServico\Traits\Gets;

trait GetSieSief
{
    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     candidatosEstrangeirosAprovados
     *
     * @return  array|json ( "uuid_candidato", "nome_candidato", "id_curso", "orientador", "email_orientador", "telefone_orientador", "area_concentracao", "atendimento_especializado", )
     */
    public function getCandidatosEstrangeirosAprovados()
    {
        return $this->proxyV3XmlBasic("candidatosEstrangeirosAprovados");
    }

    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     dadosCurso
     *
     * @param   string $idCurso
     * @return  array|json ( "nome_curso", "unidade_ofertante", "nome_programa", "coordenador_curso", "natureza", "tipo", "modalidade", "data_inicio", "data_fim", )
     */
    public function getDadosCurso(string $idCurso)
    {
        if (empty($idCurso) || strlen($idCurso) > 15 ) {
            return $this->trateReturn();
        }

        return $this->proxyV3XmlBasic("dadosCurso", "{$idCurso}");
    }

    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     documentosPessoaCurso
     *
     * @param   string $uudiCandidato
     * @param   string $idCurso
     * @return  array|json ( "titulo_documento", "documento", )
     */
    public function getDocumentosPessoaCurso(string $uudiCandidato, string $idCurso)
    {
        if (empty($uudiCandidato) || !isUuidV4($uudiCandidato) || empty($idCurso)) {
            return $this->trateReturn();
        }

        return $this->proxyV3XmlBasic("documentosPessoaCurso", "{$uudiCandidato}/{$idCurso}");
    }

    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     cursoCandidatosAprovados
     *
     * @return  array|json ( "uuid_candidato", "nome_candidato", "id_curso" )
     */
    public function getCursoCandidatosAprovados()
    {
        return $this->proxyV3XmlBasic("cursoCandidatosAprovados");
    }

    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     cursoCandidatosPorUuid
     *
     * @param   string $uudiCandidato
     * @return  array|json ( "uuid_candidato", "nome_candidato", "id_curso", )
     */
    public function getCursoCandidatosPorUuid(string $uudiCandidato)
    {
        if (empty($uudiCandidato) || !isUuidV4($uudiCandidato)) {
            return $this->trateReturn();
        }

        return $this->proxyV3XmlBasic("cursoCandidatosPorUuid", "{$uudiCandidato}");
    }

    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     dadosSolicitanteCurso
     *
     * @param   string $idCurso
     * @param   string $uudiCandidato
     * @return  array|json ( "uuid_candidato", "nome_candidato", "id_curso", "orientador", "email_orientador", "telefone_orientador", "area_concentracao", "atendimento_especializado", )
     */
    public function getDadosSolicitanteCurso(string $idCurso, string $uudiCandidato)
    {
        if (empty($idCurso) || empty($uudiCandidato) || !isUuidV4($uudiCandidato)) {
            return $this->trateReturn();
        }

        return $this->proxyV3XmlBasic("dadosSolicitanteCurso", "{$idCurso}/{$uudiCandidato}");
    }

    /**
     * @author  Henrique Batista
     * @method  get
     * @package Gsferro\MicroServico\Traits\Gets\GetSieSief
     * @version v3
     * @api     cursoCandidatosMatriculados
     *
     * @return  array|json ( "uuid_candidato", "nome_candidato", "id_curso" )
     */
    public function getCursoCandidatosMatriculados()
    {
        return $this->proxyV3XmlBasic("cursoCandidatosMatriculados");
    }
}