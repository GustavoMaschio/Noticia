<?php
    class TableData {
        private $texto;
        
        public function __construct($texto) {
            $this->texto = $texto;
        }
        
        public function renderizar() {
            return "<td>{$this->texto}</td>";
        }
    }
    
    class TableRow {
        private $celulas;
        
        public function __construct($celulas) {
            $this->celulas = $celulas;
        }
        
        public function renderizar() {
            $html ="<tr>";
            foreach($this->celulas as $celula) {
                $html .= $celula->renderizar();
            }
            $html.="</tr>";
            return $html;
        }
        
    }
    
    class TableHead {
        private $linha;
        
        public function __construct($linha) {
            $this->linha = $linha;
        }
        
        public function renderizar() {
            return "<thead>{$this->linha->renderizar()}</thead>";
            
        }
    }

    // class TableBody {
    //     private $linhas;
        
    //     public function __construct($linhas) {
    //         $this->linhas = $linhas;
    //     }
        
    //     public function renderizar() {
    //         $html = "<tbody>";
    //         foreach($this->linhas as $linha) {
    //             $html .= $linha->renderizar();
    //         }
    //         $html .= "</tbody>";
            //  return $html;
        //  }
    //  }
    
    class TableFoot {
        private $linha;
        
        public function __construct($linha) {
            $this->linha = $linha;
        }
        
        public function renderizar() {
            return "<tfoot>{$this->linha->renderizar()}</tfoot>";
        }
    }
    
    class Table {
        private $thead;
        private $tbody;
        private $tfoot;
        
        public function __construct($thead, $tbody, $tfoot) {
            $this->thead = $thead;
            $this->tbody = $tbody;  
            $this->tfoot = $tfoot;
        }
        
        public function renderizar() {
            $html = "<table>";
            if ($this->thead) {
                $html .= $this->thead->renderizar();
            }
            if ($this->tbody) {
                $html .= $this->tbody->renderizar();
            }
            if ($this->tfoot) {
                $html .= $this->tfoot->renderizar();
            }
            $html .= "</table>";
            return $html;
        }
    }
    
    $td1 = new TableData("1");
    $td2 = new TableData("Caderno");
    $td3 = new TableData("R$ 15,67");
    
    $tr1 = new TableRow([$td1, $td2, $td3]);
    
    $td4 = new TableData("2");
    $td5 = new TableData("Caneta");
    $td6 = new TableData("R$ 3,45");
    
    $tr2 = new TableRow([$td4, $td5, $td6]);
    
    $td7 = new TableData("3");
    $td8 = new TableData("Lápis");
    $td9 = new TableData("R$ 2,34");
    
    $tr3 = new TableRow([$td7, $td8, $td9]);
    
    $theadTr = new TableRow([new TableData("Código"), new TableData("Nome"), new TableData("Valor")]);
    $thead = new TableHead($theadTr);
    
    $tbody = new TableBody([$tr1, $tr2, $tr3]);
    
    $tfootTr = new TableRow([new TableData("Código"), new TableData("Nome"), new TableData("Valor")]);
    $tfoot = new TableFoot($tfootTr);
    
    $table = new Table($thead, $tbody, $tfoot);
    echo $table->renderizar();