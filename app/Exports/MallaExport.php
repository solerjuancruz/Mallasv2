<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Malla;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class MallaExport implements FromCollection, ShouldAutoSize, WithStyles, WithHeadings
{
    public function collection()
    {
        $mallas = Malla::with('user')->get();
        $data = [];
    
        foreach ($mallas as $malla) {
            $user = $malla->user;
        
            $days = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];
        
            foreach ($days as $day) {
                $data = [
                    'DÍA' => Carbon::parse($malla->{$day . 'fecha'})->format('d/m/Y'),
                    'CEDULA' => $user->cedula,
                    'NOMBRE' => $user->name,    
                    'SEMANA' => $malla->semana,
                    'CAMPAÑA' => $malla->campaña,
                    'SEGMENTO' => $malla->foco,
                    'ENCARGADO' => $malla->encargado,
                    'TOTAL HORAS' => $malla->horastotal,
                    'DIA DESCANSO' => $malla->diadescanso,
                    'INICIO' => $malla->{$day . 'inicio'} ? Carbon::parse($malla->{$day . 'inicio'})->format("H:i:s") : "0:00",
                    'FINAL' => $malla->{$day . 'final'} ? Carbon::parse($malla->{$day . 'final'})->format("H:i:s") : "0:00",
                    'DESCANSO' => $malla->{$day . 'descanso1'} ? Carbon::parse($malla->{$day . 'descanso1'})->format("H:i:s") : "0:00",
                    'DESCANSO FIN' => $malla->{$day . 'descanso2'} ? Carbon::parse($malla->{$day . 'descanso2'})->format("H:i:s") : "0:00",
                    'ALMUERZO INICIO' => $malla->{$day . '_alm_inicio'} ? Carbon::parse($malla->{$day . '_alm_inicio'})->format("H:i:s") : "0:00",
                    'ALMUERZO FINAL' => $malla->{$day . '_alm_final'} ? Carbon::parse($malla->{$day . '_alm_final'})->format("H:i:s") : "0:00",
                    'OBSERVACIONES' => $malla->observaciones,
                    'CREADA' => $malla->created_at,
                    'ACTUALIZADA' => $malla->created_at,
                ];
        
                $dataList[] = $data;
            }
        }
        
        return collect($dataList);
        
    
        
    }
    
    public function styles(Worksheet $sheet)
    {   return [
                1 => [
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => [
                            'rgb' => '000000',
                        ],
                        ],
                     
     
                     'font' => [
                
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF'],
                     ],   
                    ],   
                    
                

                     
            ];
        }

    public function headings(): array
    {
        return[
            'DIA',
            'CEDULA',
            'NOMBRE',
            'SEMANA',
            'CAMPAÑA',
            'SEGMENTO',
            'ENCARGADO',
            'TOTAL HORAS',
            'DIA DESCANSO',
            'INICIO',
            'FINAL',
            'DESCANSO',
            'DESCANSO FIN',
            'ALMUERZO INICIO',
            'ALMUERZO FINAL',
            'OBSERVACIONES',
            'CREADA',
            'ACTUALIZADA'
        ];
    }
}
