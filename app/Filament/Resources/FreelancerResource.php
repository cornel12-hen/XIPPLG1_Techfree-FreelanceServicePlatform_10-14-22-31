<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FreelancerResource\Pages;
use App\Filament\Resources\FreelancerResource\RelationManagers;
use App\Models\Freelancer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FreelancerResource extends Resource
{
    protected static ?string $model = Freelancer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('profile_pic'),
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('porto_url'),
                Forms\Components\TextInput::make('age'),
                Forms\Components\Select::make('rank')->options(
                    [
                        'Bronze' => 'Bronze',
                        'Silver' => 'Silver',
                        'Gold' => 'Gold',
                        'Platinum' => 'Platinum',
                        'Diamond' => 'Diamond',
                    ]
                ),
                Forms\Components\TextInput::make('email')->required(),
                Forms\Components\TextInput::make('password')->required(),
                Forms\Components\Textarea::make('address'),
                Forms\Components\DatePicker::make('join_date'),
                Forms\Components\TextInput::make('work_hours'),
                Forms\Components\TextInput::make('job_completed'),
                Forms\Components\TextInput::make('profile_pic'),
                Forms\Components\TextInput::make('job_id'),
                Forms\Components\TextInput::make('profile_pic'),
                Forms\Components\Select::make('availability_status')->options(
                    [
                        'Available' => 'Available',
                        'Not available' => 'Not available',
                        'On work' => 'On work',
                    ]
                ),
                Forms\Components\TextInput::make('rating'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile_pic'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('porto_url'),
                Tables\Columns\TextInputColumn::make('age')->numeric(),
                Tables\Columns\SelectColumn::make('rank')->options(
                    [
                        'Bronze' => 'Bronze',
                        'Silver' => 'Silver',
                        'Gold' => 'Gold',
                        'Platinum' => 'Platinum',
                        'Diamond' => 'Diamond',
                    ]
                ),
                Tables\Columns\TextColumn::make('email')->required(),
                Tables\Columns\TextColumn::make('password')->required(),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('join_date'),
                Tables\Columns\TextColumn::make('work_hours'),
                Tables\Columns\TextColumn::make('job_completed'),
                Tables\Columns\TextColumn::make('job_id'),
                Tables\Columns\SelectColumn::make('availability_status')->options(
                    [
                        'Available' => 'Available',
                        'Not available' => 'Not available',
                        'On work' => 'On work',
                    ]
                ),
                Tables\Columns\TextColumn::make('rating'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFreelancers::route('/'),
            'create' => Pages\CreateFreelancer::route('/create'),
            'edit' => Pages\EditFreelancer::route('/{record}/edit'),
        ];
    }
}
