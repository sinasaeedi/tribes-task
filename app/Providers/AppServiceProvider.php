<?php

namespace App\Providers;

use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Default table settings
        Table::configureUsing(function (Table $table): void {
            $table
                ->searchOnBlur()
                ->striped()
                ->defaultSort('id', 'desc')
                ->filters([
                    Tables\Filters\TrashedFilter::make(),
                ])
                ->actions([
                    Tables\Actions\ActionGroup::make([
                        Tables\Actions\EditAction::make(),
                        Tables\Actions\DeleteAction::make(),
                    ]),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make(),
                        Tables\Actions\ForceDeleteBulkAction::make(),
                        Tables\Actions\RestoreBulkAction::make(),
                    ]),
                ]);
        });
    }
}
