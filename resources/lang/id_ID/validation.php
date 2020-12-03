<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'iban'                           => 'Ini bukan IBAN yang valid.',
    'zero_or_more'                   => 'Nilai tidak bisa negatif.',
    'date_or_time'                   => 'The value must be a valid date or time value (ISO 8601).',
    'source_equals_destination'      => 'Akun sumber sama dengan akun tujuan.',
    'unique_account_number_for_user' => 'Sepertinya nomor rekening ini sudah digunakan.',
    'unique_iban_for_user'           => 'Sepertinya nomor rekening ini sudah digunakan.',
    'deleted_user'                   => 'Kerena kendala keamanan, anda tidak bisa mendaftar menggunkan alamat email ini.',
    'rule_trigger_value'             => 'Nilai ini tidak validi untuk trigger yang dipilih.',
    'rule_action_value'              => 'Nilai ini tidak valid untuk tindakan yang dipilih.',
    'file_already_attached'          => 'Upload file ";name" sudah terpasang pada objek ini.',
    'file_attached'                  => 'Successfully uploaded file ":name".',
    'must_exist'                     => 'ID di bidang :attribute tidak ada di database.',
    'all_accounts_equal'             => 'Semua akun di bidang ini harus sama.',
    'group_title_mandatory'          => 'A group title is mandatory when there is more than one transaction.',
    'transaction_types_equal'        => 'All splits must be of the same type.',
    'invalid_transaction_type'       => 'Invalid transaction type.',
    'invalid_selection'              => 'Pilihan Anda tidak valid.',
    'belongs_user'                   => 'Nilai ini tidak sah untuk bidang ini.',
    'at_least_one_transaction'       => 'Minimal harus ada satu transaksi.',
    'at_least_one_repetition'        => 'Minimal harus ada satu pengulangan.',
    'require_repeat_until'           => 'Dibutuhkan hanya sebuah angka pengulangan, atau tanggal akhir (repeat_until). Bukan keduanya.',
    'require_currency_info'          => 'Isi dalam bidang ini tidak valid jika tidak disertai informasi mata uang.',
    'not_transfer_account'           => 'This account is not an account that can be used for transfers.',
    'require_currency_amount'        => 'The content of this field is invalid without foreign amount information.',
    'equal_description'              => 'Deskripsi transaksi harus berbeda dari deskripsi umum.',
    'file_invalid_mime'              => 'File ":name" adalah tipe ":mime" yang tidak diterima sebagai upload baru.',
    'file_too_large'                 => 'File "; name" terlalu besar.',
    'belongs_to_user'                => 'Nilai dari :attribute tidak diketahui.',
    'accepted'                       => ':attribute harus diterima.',
    'bic'                            => 'Ini bukan BIC yang valid.',
    'at_least_one_trigger'           => 'Aturan harus memiliki setidaknya satu pemicu.',
    'at_least_one_action'            => 'Aturan harus memiliki setidaknya satu tindakan.',
    'base64'                         => 'Ini bukanlah data base64 encoded yang valid.',
    'model_id_invalid'               => 'ID yang diberikan tidaklah valid untuk model ini.',
    'less'                           => ':attribute harus kurang dari 10,000,000',
    'active_url'                     => ':attribute bukan URL yang valid.',
    'after'                          => ':attribute harus tanggal setelah :date.',
    'alpha'                          => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'                     => ':attribute hanya boleh berisi huruf, angka dan tanda hubung.',
    'alpha_num'                      => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                          => ':attribute harus berupa array.',
    'unique_for_user'                => 'Sudah ada entri dengan :attribute ini.',
    'before'                         => ':attribute harus tanggal sebelum :date.',
    'unique_object_for_user'         => 'Nama ini sudah digunakan.',
    'unique_account_for_user'        => 'Nama akun ini sudah digunakan.',
    'between.numeric'                => ':attribute harus antara :min dan :max.',
    'between.file'                   => ':attribute harus antara :min dan :max kilobyte.',
    'between.string'                 => ':attribute harus antara :min dan :max karakter.',
    'between.array'                  => ':attribute harus antara :min dan :max item.',
    'boolean'                        => 'Bidang :attribute harus benar atau salah.',
    'confirmed'                      => 'Konfirmasi :attribute tidak cocok.',
    'date'                           => ':attribute bukan tanggal yang valid.',
    'date_format'                    => ':attribute tidak cocok dengan the format :format.',
    'different'                      => ':attribute dan :other harus berbeda.',
    'digits'                         => ':attribute harus angka :digits.',
    'digits_between'                 => ':attribute harus antara :min dan :max angka.',
    'email'                          => ':attribute harus alamat email yang valid.',
    'filled'                         => 'Bidang :attribute diperlukan.',
    'exists'                         => ':attribute yang dipilih tidak valid.',
    'image'                          => ':attribute harus gambar.',
    'in'                             => ':attribute yang dipilih tidak valid.',
    'integer'                        => ':attribute harus bilangan bulat.',
    'ip'                             => ':attribute harus alamat IP yang valid.',
    'json'                           => ':attribute harus string JSON yang valid.',
    'max.numeric'                    => ':attribute tidak boleh lebih besar dari :max.',
    'max.file'                       => ':attribute tidak boleh lebih besar dari kilobyte :max.',
    'max.string'                     => ':attribute tidak boleh lebih besar dari karakter :max.',
    'max.array'                      => ':attribute tidak boleh memiliki lebih dari item :max.',
    'mimes'                          => ':attribute harus jenis file: :values.',
    'min.numeric'                    => ':attribute harus sedikitnya :min.',
    'lte.numeric'                    => ':attribute harus kurang dari atau sama dengan :value.',
    'min.file'                       => 'Atribut harus minimal kilobyte :min.',
    'min.string'                     => ':attribute harus minimal karakter :min.',
    'min.array'                      => ':attribute harus minimal item :min.',
    'not_in'                         => ':attribute yang dipilih tidak valid.',
    'numeric'                        => ':attribute harus angka.',
    'numeric_native'                 => 'Nilai asli haruslah berupa angka.',
    'numeric_destination'            => 'Nilai tujuan haruslah berupa angka.',
    'numeric_source'                 => 'Nilai asal haruslah berupa angka.',
    'regex'                          => 'Format :attribute tidak valid.',
    'required'                       => 'Bidang :attribute diperlukan.',
    'required_if'                    => 'Bidang :attribute diperlukan ketika :other adalah :value.',
    'required_unless'                => 'Bidang :attribute diperlukan minimal :other adalah dalam :values.',
    'required_with'                  => 'Bidang :attribute diperlukan ketika :values terdapat nilai.',
    'required_with_all'              => 'Bidang :attribute diperlukan ketika :values ada.',
    'required_without'               => 'Bidang :attribute diperlukan ketika :values tidak ada.',
    'required_without_all'           => 'Bidang :attribute diperlukan ketika tidak ada satupun :values ada.',
    'same'                           => ':attribute dan :other harus cocok.',
    'size.numeric'                   => ':attribute harus :size.',
    'amount_min_over_max'            => 'Jumlah minimum tidak boleh lebih besar dari jumlah maksimum.',
    'size.file'                      => ':attribute harus kilobyte :size.',
    'size.string'                    => ':attribute harus karakter :size.',
    'size.array'                     => ':attribute harus berisi item :size.',
    'unique'                         => ':attribute sudah diambil.',
    'string'                         => ':attribute harus sebuah string.',
    'url'                            => 'Format atribut tidak valid.',
    'timezone'                       => ':attribute harus zona yang valid.',
    '2fa_code'                       => 'Bidang :attribute tidak valid.',
    'dimensions'                     => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'                       => 'Bidang :attribute memiliki nilai duplikat.',
    'file'                           => ':attribute harus berupa file.',
    'in_array'                       => 'Bidang :attribute tidak ada in :other.',
    'present'                        => 'Bidang :attribute harus ada.',
    'amount_zero'                    => 'Jumlah total tidak boleh nol.',
    'current_target_amount'          => 'The current amount must be less than the target amount.',
    'unique_piggy_bank_for_user'     => 'Nama celengan harus unik.',
    'unique_object_group'            => 'The group name must be unique',

    'secure_password'                => 'This is not a secure password. Please try again. For more information, visit https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'      => 'Tipe pengulangan yang tidak valid untuk transaksi berkala.',
    'valid_recurrence_rep_moment'    => 'Waktu pengulangan tidaklah valid untuk tipe pengulangan ini.',
    'invalid_account_info'           => 'Informasi akun tidak valid.',
    'attributes'                     => [
        'email'                   => 'alamat email',
        'description'             => 'keterangan',
        'amount'                  => 'jumlah',
        'name'                    => 'nama',
        'piggy_bank_id'           => 'celengan ID',
        'targetamount'            => 'target dana',
        'opening_balance_date'    => 'opening balance date',
        'opening_balance'         => 'opening balance',
        'match'                   => 'cocok',
        'amount_min'              => 'jumlah minimal',
        'amount_max'              => 'jumlah maksimal',
        'title'                   => 'judul',
        'tag'                     => 'label',
        'transaction_description' => 'keterangan transaksi',
        'rule-action-value.1'     => 'nilai aturan tindakan #1',
        'rule-action-value.2'     => 'nilai aturan tindakan #2',
        'rule-action-value.3'     => 'nilai aturan tindakan #3',
        'rule-action-value.4'     => 'nilai aturan tindakan #4',
        'rule-action-value.5'     => 'nilai aturan tindakan #5',
        'rule-action.1'           => 'aturan tindakan #1',
        'rule-action.2'           => 'aturan tindakan #2',
        'rule-action.3'           => 'aturan tindakan #3',
        'rule-action.4'           => 'aturan tindakan #4',
        'rule-action.5'           => 'aturan tindakan #5',
        'rule-trigger-value.1'    => 'nilai pemicu aturan #1',
        'rule-trigger-value.2'    => 'nilai pemicu aturan #2',
        'rule-trigger-value.3'    => 'nilai pemicu aturan #3',
        'rule-trigger-value.4'    => 'nilai pemicu aturan #4',
        'rule-trigger-value.5'    => 'nilai pemicu aturan #5',
        'rule-trigger.1'          => 'pemicu aturan #1',
        'rule-trigger.2'          => 'pemicu aturan #2',
        'rule-trigger.3'          => 'pemicu aturan #3',
        'rule-trigger.4'          => 'pemicu aturan #4',
        'rule-trigger.5'          => 'pemicu aturan #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'    => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'withdrawal_source_bad_data'     => 'Could not find a valid source account when searching for ID ":id" or name ":name".',
    'withdrawal_dest_need_data'      => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'withdrawal_dest_bad_data'       => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'deposit_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'deposit_source_bad_data'  => 'Could not find a valid source account when searching for ID ":id" or name ":name".',
    'deposit_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'deposit_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'deposit_dest_wrong_type'  => 'The submitted destination account is not of the right type.',

    'transfer_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'transfer_source_bad_data'  => 'Could not find a valid source account when searching for ID ":id" or name ":name".',
    'transfer_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'transfer_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',
    'need_id_in_edit'           => 'Each split must have transaction_journal_id (either valid ID or 0).',

    'ob_source_need_data' => 'Need to get a valid source account ID and/or valid source account name to continue.',
    'ob_dest_need_data'   => 'Need to get a valid destination account ID and/or valid destination account name to continue.',
    'ob_dest_bad_data'    => 'Could not find a valid destination account when searching for ID ":id" or name ":name".',

    'generic_invalid_source'      => 'You can\'t use this account as the source account.',
    'generic_invalid_destination' => 'You can\'t use this account as the destination account.',

    'gte.numeric' => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'  => 'The :attribute must be greater than :value.',
    'gte.file'    => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'  => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'   => 'The :attribute must have :value items or more.',

    'amount_required_for_auto_budget' => 'The amount is required.',
    'auto_budget_amount_positive'     => 'The amount must be more than zero.',
    'auto_budget_period_mandatory' => 'The auto budget period is a mandatory field.',
];
