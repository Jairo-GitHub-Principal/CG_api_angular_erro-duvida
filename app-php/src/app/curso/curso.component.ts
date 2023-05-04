import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Curso } from './curso';
import { CursoService } from './curso.service';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent implements OnInit {

  // url
  url = "http://localhost/api/php/";
  // vetor cursos
  vetor: Curso[];

  // objeto:

  curso = new Curso();

  constructor(private curso_Service: CursoService) { }

  ngOnInit(): void {
      this.selecao();
  }
  cadastro(): void { alert("cadastro"); }
  selecao() {

    this.curso_Service.obterCursos().subscribe(
      (res: Curso[]) => {
        this.vetor = res;
      }
    )
  }
  alterar(): void { alert("alterar"); }
  remover(): void { alert("remover"); }

}
