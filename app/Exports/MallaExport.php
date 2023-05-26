<?php

namespace App\Exports;

use App\Models\Malla;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Events\AfterSheet;

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
                    'NOMBRE' => $user->name,
                    'CEDULA' => $user->cedula,
                    'DÍA' => $day,
                    'SEMANA' => $malla->semana,
                    'CAMPAÑA' => $malla->campaña,
                    'FOCO' => $malla->foco,
                    'ENCARGADO' => $malla->encargado,
                    'TOTAL HORAS' => $malla->horastotal,
                    'DIA DESCANSO' => $malla->diadescanso,
                    'INICIO' => $malla->{$day . 'inicio'} ?? $malla->{$day . 'inicio'} ?? 'N/A',
                    'FINAL' => $malla->{$day . 'final'} ?? $malla->{$day . 'final'} ?? 'N/A',
                    'DESCANSO' => $malla->{$day . 'descanso1'} ?? $malla->{$day . 'descanso1'} ?? 'N/A',
                    'DESCANSO FIN' => $malla->{$day . 'descanso2'} ?? $malla->{$day . 'descanso2'} ?? 'N/A',
                    'ALMUERZO INICIO' => $malla->{$day . '_alm_inicio'} ?? $malla->{$day . '_alm_inicio'} ?? 'N/A',
                    'ALMUERZO FINAL' => $malla->{$day . '_alm_final'} ?? $malla->{$day . '_alm_final'} ?? 'N/A',
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
            'NOMBRE',
            'CEDULA',
            'DIA',
            'SEMANA',
            'CAMPAÑA',
            'FOCO',
            'ENCARGADO',
            'TOTAL HORAS',
            'DIA DESCANSO',
            'INICIO',
            'FINAL',
            'DESCANSO',
            'DESCANSO FIN',
            'ALMUERZO INICIO',
            'ALMUERZO FINAL',
            'CREADA',
            'ACTUALIZADA'
        ];
    }
}
