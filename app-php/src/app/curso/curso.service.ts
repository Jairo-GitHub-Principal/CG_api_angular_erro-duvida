import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { Curso } from './curso';
import { Observable } from 'rxjs';
map

@Injectable({
  providedIn: 'root'
})
export class CursoService {
  url = "http://localhost/api/php/";
  vetor:Curso[];

  constructor(private http:HttpClient) { }

  obterCursos():Observable<Curso[]>{
    return this.http.get(this.url+"listar").pipe(
      map((res) => {
        this.vetor = res['cursos'];
        return this.vetor;
      })
    )
  }
}
